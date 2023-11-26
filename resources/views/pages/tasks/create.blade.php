<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="card-title">
                <h3 class="m-0">Criar Nova Tarefa</h3>
            </div>
            <div class="card-tools">
                <a href="{{ route('tasks.index') }}" class="btn btn-danger"><i class="las la-arrow-left"></i> Voltar</a>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('tasks.store') }}">
                @csrf
                @include('pages.tasks._form')
                <button type="submit" class="btn btn-primary mt-3"><i class="las la-plus"></i>Salvar</button>
            </form>
        </div>
    </div>
</x-app-layout>