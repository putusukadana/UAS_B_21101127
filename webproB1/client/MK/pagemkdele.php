<h3>Hapus Data Matakuliah <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil di Hapus
</div>
<form>
    <div class="mb-3">
        <label class="form-label">Kode Matakuliah</label>
        <input type="text" class="form-control" id="txkodemk" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Matakuliah</label>
        <input type="text" class="form-control" id="txnamamk" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Semester</label>
        <select id="txsms" class="form-select" disabled>
            <option value="S1"> Smester 1 </option>
            <option value="S2"> Smester 2</option>
            <option value="S3"> Smester 3</option>
            <option value="S4"> Smester 4</option>
            <option value="S5"> Smester 5</option>
            <option value="S6"> Smester 6</option>
            <option value="S7"> Smester 7</option>
            <option value="S8"> Smester 8</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="deletedata()" class="btn btn-danger">Hapus Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>

<script>
    document.getElementById("pesan").style.display = "none";
    // document.getElementById("sembunyi").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/webproB1/client/index.php?p=matakuliah")
}
</script>
<script src="http://localhost/webproB1/client/MK/pagemkcaridata.js"></script>
<script src="http://localhost/webproB1/client/MK/pagemkdeletedata.js"></script>