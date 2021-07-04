<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My custom Bulma website</title>
    <link rel="stylesheet" href="../../css/mystyles.css">
</head>

<body>
    <div class="container m-6">
        <form action="{{ url('/producto') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label">Nombre del producto</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Ingrese el nombre del producto" name="nombre">
                </div>
            </div>

            <div class="field">
                <label class="label">Etapa</label>
                <div class="control">
                    <div class="select">
                        <select class="form-control"class="form-control" name="etapa">
                            <option value="iniciación">Iniciación</option>
                            <option value="desarrollo">Desarrollo</option>
                            <option value="finalización">Finalización</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Categoría</label>
                <div class="control">
                    <div class="select" >
                        <select class="form-control"class="form-control"name="categoria">
                            <option value="pollo">Pollo</option>
                            <option value="cerdo">Cerdo</option>
                            <option value="pavo">Pavo</option>
                            <option value="rumiantes">Ruminates</option>
                            <option value="cereales y maíz">Celeares y maíz</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Marca</label>
                <div class="control">
                    <div class="select">
                        <select class="form-control"class="form-control"name="marca">
                            <option value="provi">Provi</option>
                            <option value="purina">Purina</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column is-half">
                    <div class="field">
                        <label class="label">Peso del costal</label>
                        <div class="control">
                            <div class="select" >
                                <select class="form-control"class="form-control"name="peso">
                                    <option value="40">40 Kg</option>
                                    <option value="20">20 Kg</option>
                                    <option value="10">10 Kg</option>
                                    <option value="5">5 Kg</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-half">
                    <div class="field">
                        <label class="label">Precio (costal)</label>
                        <div class="control">
                            <input class="input" type="number" placeholder="Precio por costal" name="precioSaco">
                        </div>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Precio (Kg)</label>
                <div class="control">
                    <input class="input" type="number" placeholder="Precio por Kg" name="precioKg">
                </div>
            </div>

            <div class="field">
                <label class="label">Cantidad (sacos)</label>
                <div class="control">
                    <input class="input" type="number" placeholder="Cantidad de sacos" name="totalSacos">
                </div>
            </div>

            <div class="field">
                <label class="label">Cantidad (Kg)</label>
                <div class="control">
                    <input class="input" type="number" placeholder="Cantidad en Kg" name="totalKg">
                </div>
            </div>

            <div class="field">
                <label class="label">Descripción</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Introduzca una descripción del producto"
                        name="descripcion"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label">Imagen del producto (opcional)</label>
                <div class="file has-name">
                    <label class="file-label">
                        <input class="file-input" type="file" name="imagen">
                        <span class="file-cta">
                            <span class="file-icon">
                                <i class="fas fa-upload"></i>
                            </span>
                            <span class="file-label">
                                Choose a file…
                            </span>
                        </span>
                    </label>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Guardar</button>
                </div>
                <div class="control">
                    <button class="button is-link is-light">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>