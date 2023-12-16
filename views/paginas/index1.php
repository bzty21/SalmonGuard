{% extends "Pagina.html" %} {% block content %}

<h2>Clasificador de Imágenes</h2>

<div>
    <form id="upload-file" method="post" enctype="multipart/form-data">
        <label for="imageUpload" class="upload-label">
            Elegir Imagen
        </label>
        <input type="file" name="file" id="imageUpload" accept=".mp4">
    </form>

    <div class="image-section" style="display:none;">
        <div class="img-preview">
            <div id="imagePreview">
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-dark" id="btn-predict">Predicción</button>
        </div>
    </div>

    <div class="loader" style="display:none;"></div>

    <h3 id="result">
        <span> </span>
    </h3>

</div>

{% endblock %}