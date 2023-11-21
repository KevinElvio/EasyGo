<?php

class historyRental {
    private $dbh;
    private $stmt;

    public function __construct() {
        // Data soucre name
        $dsn = 'mysql:host=localhost;dbname=easygo';
        try
        {
            $this->dbh = new PDO($dsn,'root','');
        }
        catch (PDOException $e)
        {
            die($e->getMessage('ERROR BRO'));
        }
    }

    public function getAllhistory() 
    {
        $this ->stmt = $this->dbh -> prepare('select foto_transport, nama_transport, tgl_order, id_order, DATEDIFF(tgl_pengembalian, tgl_peminjaman) * harga_sewa AS total, jenis_status
        from tbl_order o
        join tbl_user u on u.id_user = o.id_user
        join tbl_transport t on t.id_transport = o.id_transport
        join tbl_statusorder s on s.id_statusorder = o.id_statusorder');
        $this ->stmt -> execute();
        return $this ->stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
}