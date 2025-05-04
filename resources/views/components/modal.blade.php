@props([
    'modal_id' => '', 
    'modal_title' => '',
    'modal_body' => '',
    'modal_btn' => false,
])
<style>
    .description-container {
    height: 280px; 
    overflow-y: auto; 
    border: 1px solid #ddd; 
    padding: 10px;
    background-color: #f9f9f9; 
    border-radius: 5px;
}

</style>
<div class="modal fade" id="{{ $modal_id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $modal_title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="{{ $modal_body }}">
                <div class="card-body">
                    <h5 class="card-title placeholder-glow">
                      <span class="placeholder col-6"></span>
                    </h5>
                    <p class="card-text placeholder-glow">
                      <span class="placeholder col-7"></span>
                      <span class="placeholder col-4"></span>
                      <span class="placeholder col-4"></span>
                      <span class="placeholder col-6"></span>
                      <span class="placeholder col-8"></span>
                    </p>
                    <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                @if($modal_btn)
                    <button type="button" class="btn btn-primary">{{ $modal_btn }}</button>
                @endif
            </div>
        </div>
    </div>
</div>