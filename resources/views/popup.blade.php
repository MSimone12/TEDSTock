
<img src="{{asset($img->imagem)}}" alt="" class="col-6 justify-content-start img-fluid" style="position:absolute; top: 5%;left:5%;">
<div class="col-6 text-right" style="position:absolute; bottom: 50px;right:120px;">
  <button id="btnDownload" type="button" class="btn btn-primary form-button">
    <p>DOWNLOAD</p>
  </button>
  <input type="hidden" name="inputId" value="{{$img->id}}">
</div>
