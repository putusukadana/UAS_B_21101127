<h3>Tambah Data Matakuliah</h3>
<div class="alert alert-primary" role="alert" id="pesan">
  Data berhasil ditambahkan
</div>
<form>
    <div class="mb-3">
        <label class="form-label">Kode Matakuliah</label>
        <input type="text" class="form-control" id="txkodemk" placeholder="Isikan Kode Matakuliah">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Matakuliah</label>
        <input type="text" class="form-control" id="txnamamk" placeholder="Isikan Nama Matakuliah">
    </div> 
    <div class="mb-3">
        <label class="form-label">Semester</label>
        <select id="txsms" class="form-select">
            <option value="Smester 1"> Smester 1 </option>
            <option value="Smester 2"> Smester 2</option>
            <option value="Smester 3"> Smester 3</option>
            <option value="Smester 4"> Smester 4</option>
            <option value="Smester 5"> Smester 5</option>
            <option value="Smester 6"> Smester 6</option>
            <option value="Smester 7"> Smester 7</option>
            <option value="Smester 8"> Smester 8</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="storedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>

<script>
    document.getElementById("pesan").style.display = "none";
function ngakjadi() {
  location.replace("http://localhost/webproB1/client/index.php?p=matakuliah")
}
</script>
<script src="http://localhost/webproB1/client/MK/pagemkstoredata.js"></script>