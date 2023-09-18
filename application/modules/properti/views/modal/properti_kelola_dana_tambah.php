<div class="modal fade" id="modal-tambah-properti-kelola-dana" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form id="FrmTambahKelolaDana" class="form-horizontal form-properti-kelola-dana-baru" role="form" method="POST" action="/properti/ajax_properti">
                    <div class="row">
                        <div class="col-lg-2 mt-2">
                            <label class="form-control-label bold">Deskripsi</label>
                        </div>
                        <div class="col-lg-6">
                            <input required type="text" class="form-control" placeholder="Deskripsi" name="form[deskripsi]" maxlength="255">
                        </div>
                        <div class="col-lg-12 mt-2">
                            <div class="form-group">
                                <div class="mt-repeater-deskripsi mt-repeater-group">
                                    <table class="table table-striped table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="bold text-primary">Keterangan</th>
                                                <th style="width: 235px;" class="bold text-primary">Dokumen</th>
                                                <th class="bold text-primary">Jumlah</th>
                                                <th style="width: 30px;" class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody data-repeater-list="form[repeater_deskripsi]" id="mt-repeater-tbody-deskripsi">
                                            <tr data-repeater-item class="mt-repeater-item">
                                                <td>
                                                    <div class="mt-repeater-input">
                                                        <input required type="text" class="form-control keterangan" placeholder="Keterangan">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="mt-repeater-input">
                                                        <input required type="file" class="foto" placeholder="Dokumen" style="width: 235px;">
                                                        <label class="loading-foto d-none"><i class="fa fa-spin fa-sync-alt"></i> </label>
                                                        <button style="margin:2px;" type="button" class="btn btn-sm btn-primary detail-foto d-none"><i class="fa fa-external-link-alt"></i> Lihat File</button>
                                                        <button style="margin:2px;" type="button" class="btn btn-sm btn-danger hapus-foto d-none"><i class="fa fa-trash"></i> Hapus File</button>
                                                        <input class="foto_hidden" type="hidden" value="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="mt-repeater-input">
                                                        <input required type="text" class="form-control jumlah text-right" placeholder="Jumlah" onkeypress="return validatedata(event);">
                                                    </div>
                                                </td>
                                                <td>
                                                    <center>
                                                        <div class="mt-repeater-input mt-delete">
                                                            <a role="button" data-repeater-delete class="mt-repeater-delete-deskripsi"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </center>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a data-repeater-create role="button" class="btn btn-primary btnTambahProgres float-left text-light"><i class="fa fa-plus"></i> Tambah Progres</a>
                                    <label class="bold total-kelola-dana float-right mt-2">Total</label>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="form[id_properti]">
                    <input type="hidden" name="form[total]">
                    <input type="hidden" name="form[uraian]">
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary ladda-button ladda-button-submit" onclick="SimpanTambahKelolaDana();" data-style="slide-up">Konfirmasi</button>
            </div>
        </div>
    </div>
</div>