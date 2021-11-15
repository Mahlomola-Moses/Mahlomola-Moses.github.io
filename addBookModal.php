<div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add Book</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="row g-3">
                  
                  <div class="col-md-6">
                    <label for="bookName" class="form-label">Book Name</label>
                    <input type="text" class="form-control" id="bookName">
                  </div>
                  <div class="col-md-6">
                    <label for="bookCode" class="form-label">Book Code</label>
                    <input type="text" class="form-control" id="bookCode">
                  </div>
                  <div class="col-md-6">
                    <label for="bookType" class="form-label">Book Type</label>
                    <select class="form-select" id="bookType" aria-label="bookType">
                      <option>ICT</option>
                      <option value="1">LLB</option>
                      <option value="2">DC</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="faculty" class="form-label">Faculty</label>
                    <select class="form-select" id="faculty" aria-label="faculty">
                      <option>ICT</option>
                      <option value="1">LLB</option>
                      <option value="2">DC</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputNumber" class="form-label">Book Cover Upload</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img id="coverPreview" src="" alt="upload cover" height='90%' width='60%'>
                  </div>
                  
                  
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>


<script>

    

    formFile.onchange = evt => {
        $('#coverPreview').show();
        const [file] = formFile.files
        if (file) {
            coverPreview.src = URL.createObjectURL(file)
        }
    }
</script>