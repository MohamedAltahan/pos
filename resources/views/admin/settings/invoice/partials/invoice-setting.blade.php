<div class="tab-pane fade" id="layout-settings" role="tabpanel" aria-labelledby="layout-settings-tab">
    {{ $dataTable->table() }}
</div>

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
