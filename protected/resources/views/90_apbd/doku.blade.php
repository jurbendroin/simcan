<?php
use hoaaah\LaravelBreadcrumb\Breadcrumb as Breadcrumb;
?>

@extends('layouts.app2')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <?php
                $this->title = 'Dokumen Anggaran Pendapatan dan Belanja (APBD) Permendagri-90';
                $breadcrumb = new Breadcrumb();
                $breadcrumb->homeUrl = 'modul3';
                $breadcrumb->begin();
                $breadcrumb->add(['label' => 'Anggaran']);
                $breadcrumb->add(['label' => 'APBD']);
                $breadcrumb->end();
            ?>
    </div>
  </div>
  <div id="pesan"></div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <p>
            <h2 class="panel-title">Dokumen Anggaran Pendapatan dan Belanja (APBD) Permendagri-90</h2>
          </p>
        </div>

        <div class="panel-body">
          <div class='tabs-x tabs-above tab-bordered tabs-krajee'>
            <div id="judul" class="alert alert-info col-md-12"><b>Daftar Dokumen Anggaran Pendapatan dan Belanja (APBD)
                Permendagri-90</b></div>
            <form class="form-horizontal" role="form" autocomplete='off' action="#" method="">
              <div>
                <a type="button" id="btnAddDokumen" class="btn btn-labeled btn-sm btn-success"
                  data-dismiss="modal"><span class="btn-label"><i class="fa fa-plus fa-fw fa-lg"></i></span> Tambah
                  Dokumen</a>
              </div>
            </form>
            <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#dokumen" aria-controls="dokumen" role="tab" data-toggle="tab">Dokumen
                  APBD</a></li>
              <li><a href="#rekap" aria-controls="rekap" role="tab-kv" data-toggle="tab">Rekapitulasi APBD</a></li>
              <li><a href="#tapd" aria-controls="tapd" role="tab-kv" data-toggle="tab">Daftar TAPD</a>
              </li>
              <li class="disabled"><a href="#tapd_unit" aria-controls="tapd_unit" role="tab-kv" data-toggle="tab">Unit
                  TAPD</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="dokumen">
                <br>
                <table id="tblDokumen" class="table table-striped table-bordered table-responsive" cellspacing="0"
                  width="100%">
                  <thead>
                    <tr>
                      <th width="10%" style="text-align: center; vertical-align:middle">Aksi</th>
                      <th width="5%" style="text-align: center; vertical-align:middle">No Urut</th>
                      <th width="10%" style="text-align: center; vertical-align:middle">Tahun Anggaran</th>
                      <th width="10%" style="text-align: center; vertical-align:middle">Nomor Dokumen</th>
                      <th style="text-align: center; vertical-align:middle">Uraian Dokumen</th>
                      <th width="10%" style="text-align: center; vertical-align:middle">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <div role="tabpanel" class="tab-pane fade in" id="rekap"><br>
                <form class="form-horizontal" role="form" autocomplete='off' action="#" method="">
                  <div>
                    <a type="button" id="btnAddLoad" class="btn btn-labeled btn-sm btn-primary"
                      data-dismiss="modal"><span class="btn-label"><i class="fa fa-refresh fa-fw fa-lg"></i></span>Load
                      Data PPAS-90</a>
                  </div>
                </form>
                <table id="tblRekapPPAS" class="table table-striped table-bordered table-responsive" cellspacing="0"
                  width="100%">
                  <thead style="font-size: 11px;">
                    <tr>
                      <th width="5%" rowspan="3" style="text-align: center; vertical-align:middle">Aksi</th>
                      <th rowspan="3" style="text-align: center; vertical-align:middle">Nama Program PPAS</th>
                      <th colspan="10" style="text-align: center; vertical-align:middle">Rincian Data</th>
                    </tr>
                    <tr>
                      <th colspan="2" style="text-align: center; vertical-align:middle">PPAS</th>
                      <th colspan="2" style="text-align: center; vertical-align:middle">Program SKPD</th>
                      <th colspan="2" style="text-align: center; vertical-align:middle">Kegiatan SKPD</th>
                      <th colspan="2" style="text-align: center; vertical-align:middle">Sub Kegiatan SKPD</th>
                      <th colspan="2" style="text-align: center; vertical-align:middle">Aktivitas SKPD</th>
                    </tr>
                    <tr>
                      <th width="8%" style="text-align: center; vertical-align:middle">Pagu</th>
                      <th width="5%" style="text-align: center; vertical-align:middle">Pelaksana</th>
                      <th width="5%" style="text-align: center; vertical-align:middle">Jumlah</th>
                      <th width="8%" style="text-align: center; vertical-align:middle">Pagu</th>
                      <th width="5%" style="text-align: center; vertical-align:middle">Jumlah</th>
                      <th width="8%" style="text-align: center; vertical-align:middle">Pagu</th>
                      <th width="5%" style="text-align: center; vertical-align:middle">Jumlah</th>
                      <th width="8%" style="text-align: center; vertical-align:middle">Pagu</th>
                      <th width="5%" style="text-align: center; vertical-align:middle">Jumlah</th>
                      <th width="8%" style="text-align: center; vertical-align:middle">Pagu</th>
                    </tr>
                  </thead>
                  <tbody style="font-size: 11px;">
                  </tbody>
                </table>
              </div>
              <div role="tabpanel" class="tab-pane fade in" id="tapd">
                <br>
                <button type="button" class="btn btn-success btn-labeled btnTambahTim" id='btnTambahTim'
                  data-dismiss="modal" aria-hidden="true">
                  <span class="btn-label"><i class="fa fa-plus fa-fw fa-lg"></i></span>Tambah TAPD</button>
                <table id="tblTAPD" class="table table-striped table-bordered table-responsive" cellspacing="0"
                  width="100%">
                  <thead>
                    <tr>
                      <th width="5%" style="text-align: center; vertical-align:middle">No</th>
                      <th width="15%" style="text-align: center; vertical-align:middle">NIP</th>
                      <th style="text-align: center; vertical-align:middle">Nama Pejabat</th>
                      <th width="25%" style="text-align: center; vertical-align:middle">Jabatan</th>
                      <th width="15%" style="text-align: center; vertical-align:middle">Peran Tim</th>
                      <th width="10%" style="text-align: center; vertical-align:middle">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <div role="tabpanel" class="tab-pane fade in" id="tapd_unit">
                <br>
                <div class="form-group">
                  <a id="btnBackTapd" class="btn btn-warning" title="Kembali ke Daftar Anggota TAPD"><i
                      class="fa fa-arrow-left fa-fw fa-lg"></i></a>
                  <label for="nip_tapd" class="col-sm-3 control-label" align='left'>Organisasi Perangkat Daerah
                    :</label>
                  <div class="col-sm-6">
                    <select type="text" class="select2 form-control id_unit_ref col-sm-12" id="id_unit_ref"
                      name="id_unit_ref"></select>
                  </div>
                  <input type="hidden" class="form-control" id="id_tapd_unit" name="id_tapd_unit">
                  <button type="button" id="btnTambahUnit" class="btn btn-success btn-labeled btnTambahUnit"
                    data-dismiss="modal" aria-hidden="true">
                    <span class="btn-label"><i class="fa fa-plus fa-fw fa-lg"></i></span>Tambah Unit</button>
                </div>
                <table id="tblUnitTAPD" class="table table-striped table-bordered table-responsive" cellspacing="0"
                  width="100%">
                  <thead>
                    <tr>
                      <th width="5%" style="text-align: center; vertical-align:middle">No</th>
                      <th width="10%" style="text-align: center; vertical-align:middle">Kode Unit</th>
                      <th style="text-align: center; vertical-align:middle">Uraian Unit</th>
                      <th width="10%" style="text-align: center; vertical-align:middle">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="TambahDokumen" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" autocomplete='off' action="" method="post" onsubmit="return false;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id_dokumen_rkpd" id="id_dokumen_rkpd">
            <div class="form-group">
              <label for="tahun_rkpd" class="col-sm-3 control-label" align='left'>Tahun Anggaran :</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="tahun_rkpd" name="tahun_rkpd" required="required" disabled
                  style="text-align: center;" value="{{Session::get('tahun')}}">
              </div>
            </div>
            <div class="form-group has-feedback">
              <label for="tanggal_rkpd" class="col-sm-3 control-label" align='left'>Tanggal Dokumen :</label>
              <input type="hidden" name="tanggal_rkpd" id="tanggal_rkpd">
              <div class="col-sm-4">
                <input type="text" class="form-control datepicker" id="tanggal_rkpd_x" name="tanggal_rkpd_x"
                  style="text-align: center;">
                <i class="fa fa-calendar fa-fw fa-lg text-primary form-control-feedback"></i>
              </div>
            </div>
            <div class="form-group">
              <label for="nomor_rkpd" class="col-sm-3 control-label" align='left'>Nomor Dokumen :</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nomor_rkpd" name="nomor_rkpd" required="required">
              </div>
            </div>
            <div class="form-group">
              <label for="uraian_perkada" class="col-sm-3 control-label" align='left'>Uraian Dokumen :</label>
              <div class="col-sm-8">
                <textarea type="text" class="form-control" id="uraian_perkada" name="uraian_perkada" required="required"
                  rows="3"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="title">Dokumen PPAS-90 Referensi :</label>
              <div class="col-sm-8">
                <select type="text" class="form-control id_dokumen_ref select2" id="id_dokumen_ref"
                  name="id_dokumen_ref"></select>
              </div>
            </div>
            <div class="form-group">
              <label for="id_unit_perencana" class="col-sm-3 control-label" align='left'>Unit PPKD :</label>
              <div class="col-sm-8">
                <input type="hidden" class="form-control" name="id_unit_perencana" id="id_unit_perencana">
                <input type="text" class="form-control" name="id_unit_perencana_display" id="id_unit_perencana_display"
                  disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="nama_tandatangan" class="col-sm-3 control-label" align='left'>Nama Kepala Unit PPKD :</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nama_tandatangan" name="nama_tandatangan" disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="nip_tandatangan" class="col-sm-3 control-label" align='left'>NIP Kepala Unit PPKD :</label>
              <div class="col-sm-4">
                <input type="text" class="form-control nip" id="nip_tandatangan_display" name="nip_tandatangan_display"
                  maxlength="18" style="text-align: center;" disabled>
                <input type="hidden" class="form-control" id="nip_tandatangan" name="nip_tandatangan">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="row">
            <div class="col-sm-2 text-left">
              <button type="button" id="btnDelDokumen" class="btn btn-labeled btn-danger"><span class="btn-label"><i
                    class="fa fa-trash-o fa-lg fa-fw"></i></span>Hapus</button>
            </div>
            <div class="col-sm-10 text-right">
              <div class="ui-group-buttons">
                <button id="btnDokumen" type="button" class="btn btn-success btn-labeled" data-dismiss="modal">
                  <span class="btn-label"><i class="fa fa-floppy-o fa-fw fa-lg"></i></span>Simpan</button>
                <div class="or"></div>
                <button type="button" class="btn btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                  <span class="btn-label"><i class="fa fa-sign-out fa-fw fa-lg"></i></span>Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="HapusDokumen" class="modal fade" role="dialog" tabindex="-1" data-focus-on="input:first"
    data-backdrop="static">
    <div class="modal-dialog modal-xs">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Hapus Anggaran Pendapatan dan Belanja (APBD)</h4>
        </div>
        <div class="modal-body">
          <input type="hidden" id="id_dokumen_hapus" name="id_dokumen_hapus">
          <div class="alert alert-danger">
            <i class="fa fa-exclamation-triangle fa-3x fa-pull-left fa-border text-danger" aria-hidden="true"></i>
            Yakin akan menghapus Anggaran Pendapatan dan Belanja (APBD) dengan nomor dokumen:
            <strong><span class="ur_dokumen_del"></span></strong> ?
            <br>
            <br>
            <strong>Catatan : Penghapusan dokumen ini akan menghapus data Anggaran Pendapatan dan Belanja (APBD)
              yang telah diproses !!!!</strong>
          </div>
        </div>
        <div class="modal-footer">
          <div class="ui-group-buttons">
            <button type="button" id="btnDelDokumen1" class="btn btn-labeled btn-danger" data-dismiss="modal"><span
                class="btn-label"><i class="fa fa-trash-o fa-lg fa-fw"></i></span> Hapus</button>
            <div class="or"></div>
            <button type="button" class="btn btn-labeled btn-warning" data-dismiss="modal" aria-hidden="true"><span
                class="btn-label"><i class="fa fa-sign-out fa-lg fa-fw"></i></span> Tutup</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="TambahTapd" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" autocomplete='off' action="" method="post" onsubmit="return false;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id_dokumen_keu_tapd" id="id_dokumen_keu_tapd">
            <input type="hidden" name="id_tapd" id="id_tapd">
            <div class="form-group">
              <label for="nip_tapd" class="col-sm-3 control-label" align='left'>NIP :</label>
              <div class="col-sm-4">
                <input type="text" class="form-control nip" id="nip_tapd_display" name="nip_tapd_display" maxlength="18"
                  style="text-align: center;" disabled>
              </div>
              <input type="hidden" class="form-control" id="nip_tapd" name="nip_tapd">
              <input type="hidden" class="form-control" id="id_pegawai_tapd" name="id_pegawai_tapd">
              <input type="hidden" class="form-control" id="id_unit_pegawai_tapd" name="id_unit_pegawai_tapd">
              <span class="btn btn-sm btn-primary btnPegawai" id="btnPegawai" name="btnPegawai"><i
                  class="fa fa-search fa-fw fa-lg"></i></span>
            </div>
            <div class="form-group">
              <label for="nama_tapd" class="col-sm-3 control-label" align='left'>Nama Pejabat :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nama_tapd" name="nama_tapd" required="required" disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="jabatan_tapd" class="col-sm-3 control-label" align='left'>Jabatan :</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="jabatan_tapd" name="jabatan_tapd" required="required"
                  rows="3" disabled></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="peran_tapd" class="col-sm-3 control-label" align='left'>Peran dalam TAPD :</label>
              <div class="col-sm-9">
                <textarea type="text" class="form-control" id="peran_tapd" name="peran_tapd" rows="3"
                  required="required"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="flag_tim_rinci" class="col-sm-3 control-label" align='left'>Status Keanggotan :</label>
              <div class="col-sm-4">
                <div id="radioBtn" class="btn-group">
                  <a class="btn btn-primary btn-sm active" id="flag_tim_rinci_1" data-toggle="flag_tim_rinci"
                    data-title="1">Aktif</a>
                  <a class="btn btn-primary btn-sm notActive" id="flag_tim_rinci_0" data-toggle="flag_tim_rinci"
                    data-title="0">Non Aktif</a>
                </div>
                <input type="hidden" class="form-control" id="flag_tim_rinci" name="flag_tim_rinci">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="row">
            <div class="col-sm-2 text-left">
            </div>
            <div class="col-sm-10 text-right">
              <div class="ui-group-buttons">
                <button id="btnSimpanTapd" type="button" class="btn btn-success btn-labeled" data-dismiss="modal">
                  <span class="btn-label"><i class="fa fa-floppy-o fa-fw fa-lg"></i></span>Simpan</button>
                <div class="or"></div>
                <button type="button" class="btn btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                  <span class="btn-label"><i class="fa fa-sign-out fa-fw fa-lg"></i></span>Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="HapusTapd" class="modal fade" role="dialog" tabindex="-1" data-focus-on="input:first" data-backdrop="static">
    <div class="modal-dialog modal-xs">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Hapus Keanggotaan TAPD</h4>
        </div>
        <div class="modal-body">
          <input type="hidden" id="id_tapd_hapus" name="id_tapd_hapus">
          <div class="alert alert-danger">
            <i class="fa fa-exclamation-triangle fa-3x fa-pull-left fa-border text-danger" aria-hidden="true"></i>
            Yakin akan menghapus Keanggotaan : <strong><span class="nama_pegawai_del"></span></strong> dari <strong>Tim
              Anggaran Pemerintah Daerah tahun {{Session::get('tahun')}}</strong>?
            <br>
          </div>
        </div>
        <div class="modal-footer">
          <div class="ui-group-buttons">
            <button type="button" id="btnDelTimTapd" class="btn btn-labeled btn-danger" data-dismiss="modal"><span
                class="btn-label"><i class="fa fa-trash-o fa-lg fa-fw"></i></span> Hapus</button>
            <div class="or"></div>
            <button type="button" class="btn btn-labeled btn-warning" data-dismiss="modal" aria-hidden="true"><span
                class="btn-label"><i class="fa fa-sign-out fa-lg fa-fw"></i></span> Tutup</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="cariReload" class="modal fade" role="dialog" tabindex="-1" data-focus-on="input:first"
    data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Daftar Program PPAS-90 yang belum di-Load ke APBD-90</h3>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form" autocomplete='off' action="" onsubmit="return false;">
            <div class="form-group">
              <div class="col-sm-12">
                <table id='tblReProses' class="table display compact table-striped table-bordered" width="100%">
                  <thead>
                    <tr>
                      <th width="10px" style="text-align: center; vertical-align:middle">Pilih</th>
                      <th width="5%" style="text-align: center; vertical-align:middle">No Urut</th>
                      <th style="text-align: center; vertical-align:middle">Nama Program PPAS</th>
                      <th width="10%" style="text-align: center; vertical-align:middle">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <div class="row">
            <div class="col-sm-2 text-left">
              <button id="btnProsesAll" type="button" class="btn btn-labeled btn-success"><span class="btn-label"><i
                    class="fa fa-download fa-fw fa-lg"></i></span> Proses Load</button>
            </div>
            <div class="col-sm-10 text-right">
              <button type="button" class="btn btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                <span class="btn-label"><i class="fa fa-sign-out fa-fw fa-lg"></i></span>Tutup</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="StatusProgram" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-xs">
      <div class="modal-content">
        <div class="modal-header">
          <h4 style="text-align: center;">Perubahan Status Anggaran Pendapatan dan Belanja (APBD) 90</h4>
        </div>
        <div class="modal-body">
          <input type="hidden" id="id_dokumen_posting" name="id_dokumen_posting">
          <input type="hidden" id="id_dokumen_referensi" name="id_dokumen_referensi">
          <input type="hidden" id="status_dokumen_posting" name="status_dokumen_posting">
          <input type="hidden" id="tahun_dokumen_posting" name="tahun_dokumen_posting">
          <div class="alert alert-success">
            <div>
              <i class="fa fa-exclamation-triangle fa-3x fa-pull-left fa-border text-info" aria-hidden="true"></i>
              <p>Yakin akan melakukan proses <strong><i><span id="ur_status_dokumen_posting"></span></i></strong> pada
                Dokumen Anggaran Pendapatan dan Belanja (APBD) Tahun <strong><span
                    id="ur_tahun_posting"></span></strong> ?</p>
            </div>
            <hr>
            <div>
              <strong>Catatan : Proses ini mempengaruhi data selanjutnya.....!!!!</strong>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="row">
            <div class="col-sm-2 text-left">
            </div>
            <div class="col-sm-10 text-right">
              <div class="ui-group-buttons">
                <button type="button" id="btnPostProgram" class="btn btn-success btn-labeled" data-dismiss="modal">
                  <span class="btn-label"><i class="fa fa-check-square-o fa-fw fa-lg"></i></span>Proses</button>
                <div class="or"></div>
                <button type="button" class="btn btn-warning btn-labeled" data-dismiss="modal" aria-hidden="true">
                  <span class="btn-label"><i class="fa fa-sign-out fa-fw fa-lg"></i></span>Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="ModalProgress" class="modal fade modal-static" role="dialog" data-backdrop="static" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <h3><strong>Sedang proses...</strong></h3>
            <i class="fa fa-spinner fa-pulse fa-5x fa-fw" style="color:grey;"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('bebas.FrmCariPegawai')

  @endsection

  @section('scripts')
  {{-- @include('ppas.js_doku_ppas') --}}
  <script type="text/javascript" language="javascript" class="init"
    src="{{ asset('/protected/resources/views/90_apbd/js/js_doku.js')}}"> </script>
  @endsection