<div class="modal fade" id="modalDelete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <form method="POST" id="formDelete">
            @csrf
            @method('DELETE')

            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center">
                    <p>Yakin hapus berita:</p>
                    <h6 id="judulDelete" class="text-danger fw-bold"></h6>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>

                    <button type="submit" class="btn btn-danger">
                        Hapus
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
