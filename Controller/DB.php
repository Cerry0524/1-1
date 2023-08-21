<?php
class DB
{
    protected $table;
    protected $pdo;
    protected $dsn = 'mysql:host=localhost;charset=utf8;dbname=db06';
    protected $links;

    function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
    }

    protected function a2s($array)
    {
        foreach ($array as $key => $value) {
            if ($key != 'id') {
                $tmp[] = "`$key`='$value'";
            }
        }
        return $tmp;
    }
    protected function sql_all($sql, ...$arg)
    {
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $tmp = $this->a2s($arg[0]);
                $sql .= " where " . join(" && ", $tmp);
            } else {
                $sql .= $arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql .= $arg[1];
        }
        return $sql;
    }
    protected function sql_one($sql, $arg)
    {
        if (is_array($arg)) {
            $tmp = $this->a2s($arg);
            $sql .= " where " . join(" && ", $tmp);
        } else {
            $sql .= " where `id`='$arg'";
        }
        return $sql;
    }
    function all(...$arg)
    {
        $sql = $this->sql_all("select * from $this->table ", ...$arg);
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    function count(...$arg)
    {
        $sql = $this->sql_all("select count(*) from $this->table ", ...$arg);
        return $this->pdo->query($sql)->fetchColumn();
    }
    function find($arg)
    {
        $sql = $this->sql_one("select * from $this->table ", $arg);
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    function del($arg)
    {
        $sql = $this->sql_one("delete from $this->table ", $arg);
        return $this->pdo->exec($sql);
    }
    function save($arg)
    {
        if (is_array($arg['id'])) {
            $tmp = $this->a2s($arg);
            $sql = "update $this->table  set " . join(",", $tmp) . "where `id`='{$arg['id']}'";
        } else {
            $keys = array_keys($arg);
            $sql = "insert into $this->table (`" . join("`,`", $keys) . "`) values ('" . join("','", $arg) . "')";
        }
        return $this->pdo->query($sql)->fetchColumn();
    }
    protected function math($math, $col, ...$arg)
    {
        $sql = $this->sql_all("select $math($col) from $this->table ", ...$arg);
        return $this->pdo->exec($sql);
    }
    function sum($col, ...$arg)
    {
        return $this->math('sum', $col, ...$arg);
    }
    function max($col, ...$arg)
    {
        return $this->math('max', $col, ...$arg);
    }
    function min($col, ...$arg)
    {
        return $this->math('min', $col, ...$arg);
    }
    function view($array, $arg = [])
    {
        extract($arg);
        include $array;
    }
    function paginate($num, $arg = null)
    {
        $total = $this->count($arg);
        $pages = ceil($total / $num);
        $now = $_GET['p'] ?? 1;
        $start = ($now - 1) * $num;

        $rows = $this->all($arg, " limit $start,$num");

        $this->links = [
            'total' => $total,
            'pages' => $pages,
            'now' => $now,
            'start' => $start,
            'rows' => $rows,
            'num' => $num,
        ];
        return $rows;
    }
    function links($table=null)
    {
        $do = (is_null($table)) ? $this->table : $table;
        $html = '';
        if ($this->links['now'] - 1 >= 1) {
            $prev = $this->links['now'] - 1;
            $html .= "<a href='?do=$do&p=$prev'> &lt; </a>";
        }
        for ($i = 1; $i <= $this->links['pages']; $i++) {
            $fontsize = ($i == $this->links['now']) ? "24px" : "16px";
            $html .= "<a href='?do=$do&p=$i' style='font-size:$fontsize'> $i </a>";
        }
        if ($this->links['now'] + 1 <= $this->links['pages']) {
            $next = $this->links['now'] + 1;
            $html .= "<a href='?do=$do&p=$next'> &gt; </a>";
        }
        return $html;
    }
    
}
