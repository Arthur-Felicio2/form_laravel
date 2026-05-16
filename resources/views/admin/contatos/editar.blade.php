@extends('layout.site')

@section('titulo', 'Editar Registro - Star Wars')

@section('conteudo')
<div class="row">
    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card black-card z-depth-5" style="margin-top: 40px; border-color: #1976d2;">
            <div class="card-content white-text">
                <h4 class="center-align blue-text text-lighten-2" style="margin-bottom: 30px;">
                    <i class="material-icons">build</i> Modificar Registro
                </h4>

                <form action="{{ route('admin.contatos.atualizar', $linha->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put"> @include('admin.contatos._form')

                    <div class="row center-align" style="margin-top: 20px;">
                        <button class="btn waves-effect waves-light blue darken-2 btn-large" type="submit" style="width: 100%;">
                            SALVAR ALTERAÇÕES
                            <i class="material-icons right">save</i>
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="card-action center-align">
                <a href="{{ route('admin.contatos') }}" class="grey-text text-lighten-1"><i class="material-icons tiny">cancel</i> Cancelar e voltar</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
    });
</script>
@endsection