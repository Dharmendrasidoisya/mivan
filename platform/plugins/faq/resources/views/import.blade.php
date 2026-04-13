@extends(BaseHelper::getAdminMasterLayoutTemplate())
@section('content')
    <div class="max-width-1200">
        <form action="{{ route('faq.import.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Import Plots / Plots from Excel</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="control-label">Choose Excel File (.xlsx, .csv)</label>
                        <input type="file" name="import_file" class="form-control" accept=".xlsx, .xls, .csv">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Start Import</button>
                </div>
            </div>
        </form>
    </div>
@stop