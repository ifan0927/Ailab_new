<?=$this->extend("Layout/layout")?>

<?=$this->section("content")?>
    <div class="container pt-5">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-body" align="center">
                        公告
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <div class="card text-dark bg-light mb-3" >
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcomment">
                            Launch demo modal
                        </button>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card text-dark bg-light mb-3" >
                    <div class="card-header">121 空氣監控</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Humidity</li>
                            <li class="list-group-item">Temperature</li>
                            <li class="list-group-item">PM 1.0</li>
                            <li class="list-group-item">PM 2.5</li>
                            <li class="list-group-item">PM 10</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card text-dark bg-light mb-3" >
                    <div class="card-header">120 空氣監控</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Humidity</li>
                            <li class="list-group-item">Temperature</li>
                            <li class="list-group-item">PM 1.0</li>
                            <li class="list-group-item">PM 2.5</li>
                            <li class="list-group-item">PM 10</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="addcomment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">新增公告</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/Home/comment_save">
            <div class="mb-3">
                <label for="commenttitle" class="form-label">標題</label>
                <input type="textarea" class="form-control" id="title" name="title" >
            </div>
            <div class="mb-3">
                <label for="commenttitle" class="form-label">內容</label>
                <input type="textarea" class="form-control" id="comment" name="comment" >
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?=$this->endSection()?>