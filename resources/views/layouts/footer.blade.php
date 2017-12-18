  @if (Auth::guest())

  @else
    <button id="botaoAdicionar" class="btn btn-success" data-toggle="modal" data-target="#modalAdicionar">
      <i class="fa fa-plus"></i>
    </button>
  @endif
    <div class="modal fade" id="modalAdicionar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adicionar Imagem</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="fa fa-times"></span>
            </button>
          </div>
            <div class="modal-body">
              <form id="add-form" method="post" action="{{route('adicionar')}}">
                {{csrf_field()}}
                <input type="text" name="nome" value="" class="col-12" placeholder="Nome" style="margin-bottom: 5px;">
                <input type="text" name="tags" value="" class="col-12" placeholder="Tags" style="margin-bottom: 5px;">
                <input type="file" name="imagem" value="">
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" id="btnAdd" class="btn btn-primary">Adicionar</button>
            </div>
        </div>
      </div>
    </div>
    <footer id="footerTed" class="col-12" style="background-color: #003e52;height:129px;">
      <p style="color: white; text-align: center; line-height: 129px; height: 129px; margin: 0;">&copy; 2017 TEDStock. O design da TEDStock é uma marca comercial da Telefónica Educação Digital.</p>
    </footer>
    <div id="load">
    </div>
  </body>
</html>
