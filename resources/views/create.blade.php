<div class="p-4">
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="input-group input-group-static mb-4">
            <label for="nome">Nome </label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="input-group input-group-static mb-4">
            <label for="descrição">Descrição</label>
            <input name="descrição" id="descrição" class="form-control" required>
        </div>
        <div class="input-group input-group-static mb-4">
            <label for="exampleFormControlSelect1" class="ms-0">Status:</label>
            <select name="status" id="status" class="form-control">
                <option value="Em espera" >Em espera</option>
                <option value="Em andamento">Em andamento</option>
                <option value="Concluído" >Concluído</option>
            </select>
          </div>
<button type="submit" class="btn bg-gradient-primary">Confirmar Tarefa</button>
</form>
</div>

    </form>
</div>
