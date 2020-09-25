<?php
use App\CekAkses;
use hoaaah\LaravelMenu\Menu;
?>

@extends('layouts.app2')
<meta name="_token" content="{!! csrf_token() !!}" />


<style>
  h2 {
    font-size: 50px;
    font-weight: 300;
    margin-bottom: 10px;
    line-height: 50px;
  }

  .highlight {
    color: #2ac5ed;
  }

  #content {
    padding: 70px 0;
  }

  #content .features-list {
    padding-top: 35px;
  }

  .features-list .feature-block {
    margin-bottom: 18px;
  }

  .features-list .feature-block .ico {
    font-size: 37px;
    line-height: 70px;
    width: 70px;
    height: 70px;
    background: #5accff;
    display: inline-block;
    border-radius: 50%;
    color: #FFFFFF;
    margin-bottom: 10px;
  }

  .features-list .feature-block .ico-primary {
    font-size: 37px;
    line-height: 70px;
    width: 70px;
    height: 70px;
    background: #428bca;
    display: inline-block;
    border-radius: 50%;
    color: #FFFFFF;
    margin-bottom: 10px;
  }

  .features-list .feature-block .ico-warning {
    font-size: 37px;
    line-height: 70px;
    width: 70px;
    height: 70px;
    background: #f0ad4e;
    display: inline-block;
    border-radius: 50%;
    color: #FFFFFF;
    margin-bottom: 10px;
  }

  .features-list .feature-block .ico-danger {
    font-size: 37px;
    line-height: 70px;
    width: 70px;
    height: 70px;
    background: #d9534f;
    display: inline-block;
    border-radius: 50%;
    color: #FFFFFF;
    margin-bottom: 10px;
  }

  .features-list .feature-block .ico-info {
    font-size: 37px;
    line-height: 70px;
    width: 70px;
    height: 70px;
    background: #5bc0de;
    display: inline-block;
    border-radius: 50%;
    color: #FFFFFF;
    margin-bottom: 10px;
  }

  .features-list .feature-block .ico-success {
    font-size: 37px;
    line-height: 70px;
    width: 70px;
    height: 70px;
    background: #5cb85c;
    display: inline-block;
    border-radius: 50%;
    color: #FFFFFF;
    margin-bottom: 10px;
  }

  .features-list .feature-block.bottom-line .ico {
    width: auto;
    height: auto;
    background: transparent;
    color: #5accff;
    text-align: center;
    font-size: 41px;
    vertical-align: top;
    margin-top: -10px;
  }

  .features-list .feature-block.bottom-line .fa-github {
    font-size: 50px;
  }

  .features-list .feature-block.bottom-line .fa-dashboard {
    font-size: 45px;
    margin-top: -15px;
  }

  .features-list .feature-block.bottom-line .ico {
    float: left;
    margin-right: 15px;
    margin-left: 21px;
  }

  .features-list .feature-block.bottom-line .features-content {
    padding-right: 15px;
    display: table;
  }

  .features-list .feature-block.bottom-line .features-content .name {
    margin-bottom: 5px;
  }

  .features-list .feature-block.bottom-line .features-content .subname {
    font-size: 16px;
    margin-bottom: 12px;
  }

  .features-list .feature-block .name {
    font-size: 16px;
    line-height: 1.25em;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .features-list .feature-block .text {
    font-size: 12px;
    line-height: normal;
    margin-bottom: 15px;
  }
</style>

@section('content')
<div class="container-fluid">
  <section id="content" class="current">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h2 style="font-size: 40px;line-height: 60px;margin-bottom: 10px;font-weight: 900;"><span
              class="highlight">Laporan APBD Pergeseran Tahunan</span></h2>
          <br>
        </div>
      </div>
      <form class="form-horizontal" role="form" autocomplete='off' action="" method="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="tahun_prarka" class="col-sm-3 control-label" align='left' style="color:#fff;">Tahun :</label>
          <div class="col-sm-2">
            <select class="form-control tahun_prarka select2" name="tahun_prarka" id="tahun_prarka"></select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="jns_dokumen" style="color:#fff;">Jenis Dokumen :</label>
          <div class="col-sm-3">
            <select class="form-control jns_dokumen select2" name="jns_dokumen" id="jns_dokumen">
              <option value="-1">--Pilih Jenis Dokumen--</option>
              <option value="1">Pergeseran APBD</option>
              <option value="2">Rancangan APBD-P</option>
              <option value="3">APBD Perubahan </option>
              <option value="4">Pergeseran APBD-P </option>
            </select>
          </div>
          <label class="control-label col-sm-2" for="id_perubahan" style="color:#fff; text-align: right;">Pergeseran ke
            :</label>
          <div class="col-sm-2">
            <select class="form-control id_perubahan select2" name="id_perubahan" id="id_perubahan">
              <option value="-1">-Ke ?-</option>
              <option value="1">Ke 1</option>
              <option value="2">Ke 2</option>
              <option value="3">Ke 3</option>
              <option value="4">Ke 4</option>
              <option value="5">Ke 5</option>
              <option value="6">Ke 6</option>
              <option value="7">Ke 7</option>
              <option value="8">Ke 8</option>
              <option value="9">Ke 9</option>
              <option value="10">Ke 10</option>
              <option value="11">Ke 11</option>
              <option value="12">Ke 12</option>
              <option value="13">Ke 13</option>
              <option value="14">Ke 14</option>
              <option value="15">Ke 15</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="no_dokumen" class="col-sm-3 control-label" align='left' style="color:#fff;">Nomor Dokumen
            :</label>
          <div class="col-sm-8">
            <select class="form-control no_dokumen select2" name="no_dokumen" id="no_dokumen"></select>
          </div>
        </div>
        <div class="form-group">
          <label for="urusan_prarka" class="col-sm-3 control-label" align='left' style="color:#fff;">Urusan :</label>
          <div class="col-sm-8">
            <select class="form-control urusan_prarka select2" name="urusan_prarka" id="urusan_prarka"></select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="bidang_prarka" style="color:#fff;">Bidang :</label>
          <div class="col-sm-8">
            <select class="form-control bidang_prarka select2" name="bidang_prarka" id="bidang_prarka"></select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="unit_prarka" style="color:#fff;">Unit :</label>
          <div class="col-sm-8">
            <select class="form-control unit_prarka select2" name="unit_prarka" id="unit_prarka"></select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="sub_prarka2" style="color:#fff;">Sub Unit :</label>
          <div class="col-sm-8">
            <select class="form-control sub_prarka2 select2" name="sub_prarka2" id="sub_prarka2"></select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="prog_prarka" style="color:#fff;">Program :</label>
          <div class="col-sm-8">
            <select class="form-control prog_prarka select2" name="prog_prarka" id="prog_prarka"></select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="keg_prarka" style="color:#fff;">Kegiatan :</label>
          <div class="col-sm-8">
            <select class="form-control keg_prarka select2" name="keg_prarka" id="keg_prarka"></select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="nama_kota_lap" style="color:#fff;">Kota Laporan</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nama_kota_lap" name="nama_kota_lap" value="Jakarta">
          </div>
        </div>
        <div class="form-group has-feedback">
          <label for="tgl_laporan" class="col-sm-3 control-label" style="color:#fff;">Tanggal Laporan </label>
          <input type="hidden" name="tgl_laporan" id="tgl_laporan">
          <div class="col-sm-3">
            <input type="text" class="form-control datepicker" id="tgl_laporan_x" name="tgl_laporan_x"
              style="text-align: center;">
            <i class="fa fa-calendar fa-fw fa-lg text-primary form-control-feedback"></i>
          </div>
          <label class="control-label col-sm-2" for="hal_mulai" style="color:#fff; text-align: right;">Halaman
            Mulai</label>
          <div class="col-sm-1">
            <input type="text" class="form-control number" id="hal_mulai" name="hal_mulai" value="1"
              style="text-align: center;">
          </div>
          <div class="col-sm-2 chkTandatangan">
            <label class="checkbox-inline">
              <input class="checkTandatangan" type="checkbox" name="checkTandatangan" id="checkTandatangan" value="1"
                checked><span style="color:#fff;"> Pakai Tanda Tangan</span>
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="jns_laporan" style="color:#fff;">Jenis Laporan :</label>
          <div class="col-sm-8">
            <select class="form-control jns_laporan select2" name="jns_laporan" id="jns_laporan"></select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="jns_laporan"></label>
          <div class="col-sm-8 text-left">
            <button type="button" class="btn btn-labeled btn-success btnProses"><span class="btn-label"><i
                  class="fa fa-print fa-lg fa-fw"></i></span> Proses</button>
          </div>
        </div>
      </form>

    </div>
  </section>
</div>

@endsection
@section('scripts')
<script src="{{ asset('/protected/resources/views/report/js/js_cetak_apbd_geser.js')}}"></script>
@endsection