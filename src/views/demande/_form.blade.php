@if ($document->id == null)
    <form method="POST" action="{{ route("demandes.create") }}" enctype="multipart/form-data">
@else
    <form method="POST" action="{{ route("demandes.update", $document->uuid) }}" enctype="multipart/form-data">
@endif
    @csrf
    {{ $method ?? null}}

    <div class="form-group row">
      <label for="cni" class="col-sm-3 col-form-label text-right">Numéro CNIB :</label>
      <div class="col-sm-9">
        <input type="text" name="cnib" class="form-control" value="{{ $document->cnib }}" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="pass" class="col-sm-3 col-form-labell text-right"> <small>Date d'expiration CNIB:</small> </label>
      <div class="col-sm-9">
        <input type="date" name="datexpi" class="form-control" value="{{ $document->datexpi }}" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="passe" class="col-sm-3 col-form-labell text-right"> Capture CNIB : </label>
      <div class="col-sm-9">
        <input type="file" class="form-control-file" name="fichier">
      </div>
    </div>
    <br><hr>
    <div class="form-group row justify-content-center">
        <button type="submit" class="btn btn-sm btn-outline-dark">{{ $btnName }} la demande <i class="fa fa-send" aria-hidden="true"></i> </button>
    </div>
  </form>
