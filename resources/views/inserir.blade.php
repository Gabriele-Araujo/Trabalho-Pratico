@extends('templates.template')

@section('content')

<p>Hora de inserir uma receita, vamos nessa !!! </p>

<div class='container'>
   
    <form name="formIns" id= "formIns" method='post' action="{{url('inserir')}}">
    @csrf
        <div class="form-group">
            <label for="nome" >Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Ex: Pudim ... ">
        </div>
        
        <div class="form-group">
            <label for="tempo">Tempo de Preparo</label>
            <input type="text" class="form-control" name="tempo" id="tempo" placeholder="Ex: 1 h ou 15 min ou 2 h e 30 min ... ">
        </div>
    
        <div class="form-group">
            <label for="qnt_pessoas">Serve quantas pessoas ? </label>
            <input type="number" class="form-control" name="qnt_pessoas" id="qnt_pessoas" placeholder="Ex: 1 ou 2 ou 3 ... ">
        </div>

        <div class="form-group">
            <label for="ingredientes">Ingredientes</label>
            <textarea class="form-control" name="ingredientes" id="ingredientes" rows="3" placeholder="Ex: 1 cx leite condensado; 4 ovos; ... "></textarea>
        </div>

        <div class="form-group">
            <label for="modo_de_preparo">Modo de Preparo</label>
            <textarea class="form-control" name="modo_de_preparo" id="modo_de_preparo" rows="6" placeholder="Ex: 1-Bata todos os ingredientes no liquidificador; 2-Leve ao forno..."></textarea>
        </div>
        
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select multiple class="form-control" name='tipo' id="tipo">
            <option>Bebida</option>
            <option>Carne</option>
            <option>Lanche</option>
            <option>Massa</option>
            <option>Sobremesa</option>
            </select>
        </div>

        <div>
            <button type="submit" class="botao">Inserir</button>
        </div>
        

    </form>

</div>

@endsection