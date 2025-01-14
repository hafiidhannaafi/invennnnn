@extends('layouts.master')
@section('content')

@section('title', 'pengajuan')
@section('pengajuan', 'active')
@section('iconss-nav', 'show')

<main id="main" class="main">

    <div class="pagetitle">

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row align-items-top">
            <div class="col-lg-14">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Peminjaman Pengembalian</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode </th>
                                    <th scope="col">Nama </th>
                                    <th scope="col">Tgl Pengajuan</th>
                                    <th scope="col">Tgl Peminjaman</th>
                                    <th scope="col">Tgl Pengembalian</th>
                                    <th scope="col">Tgl Konfirmasi ambil</th>
                                    <th scope="col">Tgl Konfirmasi kembali</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Status </th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $nomor = 1;
                                ?>
                                @foreach ($peminjaman as $data)
                                    @php
                                        $status = App\Models\DetailPeminjaman::where('kode_peminjaman', $data->kode_peminjaman)->first();
                                    @endphp
                                    @if ($status->status_konfirmasis_id == 1 ||
                                        ($status->status_konfirmasis_id == 2 && $status->status_peminjamans_id == 1) ||
                                        ($status->status_konfirmasis_id == 2 && $status->status_peminjamans_id == 2))
                                        <tr>
                                            <th>{{ $nomor++ }}</th>
                                            <td> {{ $data->kode_peminjaman }}</td>
                                            <td> {{ $data->nama_peminjam }}</td>
                                            <td> <?php echo date('d F Y', strtotime($data->tgl_pengajuan)); ?> </td>
                                            <td> <?php echo date('d F Y', strtotime($data->tgl_pinjam)); ?></td>
                                            <td> <?php echo date('d F Y', strtotime($data->tgl_kembali)); ?></td>
                                            <td>{{ $data->tgl_ambil }} </td>
                                            <td>{{ $data->tgl_konfirmasikembali }}</td>
                                            <td>
                                                <a href="/detailbarangadmin/{{ $data->kode_peminjaman }}"
                                                    style="  background-color:   #012970; color:#FFFFFF" button
                                                    type="button" class="btn btn-sm"><i class="bi bi-eye"></i></a>
                                            </td>

                                            @php
                                                $status = App\Models\DetailPeminjaman::where('kode_peminjaman', $data->kode_peminjaman)->first();
                                            @endphp
                                            <td>
                                                @if ($status->status_konfirmasis_id == 1)
                                                    <span class="badge bg-secondary">
                                                        {{ $status->status_konfirmasis->status_konfirmasi }}</span>
                                                @elseif($status->status_konfirmasis_id == 2)
                                                    <span class="badge bg-success">
                                                        {{ $status->status_konfirmasis->status_konfirmasi }}</span>
                                                @elseif($status->status_konfirmasis_id == 3)
                                                    <span class="badge bg-danger">
                                                        {{ $status->status_konfirmasis->status_konfirmasi }}</span>
                                                @elseif($status->status_konfirmasis_id == 4)
                                                    <span class="badge bg-secondary">
                                                        {{ $status->status_konfirmasis->status_konfirmasi }}</span>
                                                @elseif($status->status_konfirmasis_id == 5)
                                                    <span
                                                        class="badge bg-danger">{{ $status->status_konfirmasis->status_konfirmasi }}</span>
                                                @endif

                                                <br>
                                                @if ($status->status_konfirmasis_id == 2)
                                                    @if ($status->status_peminjamans_id == 1)
                                                        <span class="badge bg-secondary">
                                                            {{ $status->status_peminjamans->status_peminjamans }}</span>
                                                    @elseif($status->status_peminjamans_id == 2)
                                                        <span class="badge bg"
                                                            style="background-color: #FFA500; color:#FFFFFF">
                                                            {{ $status->status_peminjamans->status_peminjamans }}</span>
                                                    @elseif($status->status_peminjamans_id == 3)
                                                        <span
                                                            class="badge bg-info">{{ $status->status_peminjamans->status_peminjamans }}</span>
                                                    @endif
                                                @endif



                                                @if ($status->status_konfirmasis_id == 2)
                                                    <!--STATUS PEMINJAMAN  -->
                                                    <a href="/status_barangdiambil/{{ $data->kode_peminjaman }}"
                                                        type="button" class="btn btn btn-sm"
                                                        style="background-color: #FFA500; color:#FFFFFF"><i
                                                            class="bi bi-bag-check-fill"></i></a>
                                                    <!--STATUS PENGEMBALIAN-->
                                                    <a href="/status_kembali/{{ $data->kode_peminjaman }}"
                                                        type="button" class="btn btn-info btn-sm"><i
                                                            class="bi bi-person-check-fill"
                                                            style=" color:#FFFFFF"></i></a>
                                                @elseif ($status->status_peminjamans_id == 2 || $status->status_peminjamans_id == 3)
                                                    <span class="badge border-dark border-1 text-dark small fst-italic"
                                                        style="color:#012970;">sudah
                                                        diverifikasi</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/peminjaman/edit/{{ $data->id }}" type="button"
                                                    class="btn btn-sm"
                                                    style="background-color: #05b3c3; color:#FFFFFF"><i
                                                        class="bi bi-pencil"></i></a>
                                                <a href="/peminjaman/hapus/{{ $data->id }}"
                                                    onclick="return confirm('Hapus Data?')" type="button"
                                                    class="btn btn-danger btn-sm"><i class="bi bi-trash delete"></i></a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
