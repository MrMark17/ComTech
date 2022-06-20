@extends('layouts.main')
@section('container')
    <h1>Daftar Barang</h1>
    <br>
    <table class="table">
        <tr>
            <th style="text-align: center; vertical-align: middle;">No</th>
            <th style="text-align: center; vertical-align: middle;">Nama Barang</th>
            <th style="text-align: center; vertical-align: middle;">Harga</th>
            <th style="text-align: center; vertical-align: middle;">Stok</th>
            <th style="text-align: center; vertical-align: middle;">Deskripsi</th>
        </tr>

        <?php
            $no = 1;
            foreach ($query as $dt) : ?>
        <tr>
            <td style="text-align: center; vertical-align: middle;" class="font-weight-bold"><?= $no++ ?></td>
            <td style="text-align: center; vertical-align: middle;"><?= $dt->nama_barang ?></td>
            <td style="text-align: center; vertical-align: middle;">Rp. <?= $dt->harga ?></td>
            <td style="text-align: center; vertical-align: middle;"><?= $dt->stok ?></td>
            <td style="text-align: center; vertical-align: middle;"><?= $dt->keterangan ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
@endsection
