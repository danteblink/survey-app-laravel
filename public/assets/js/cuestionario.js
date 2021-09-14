// Ajax para agregar institucion a la lista de instituciones
$(document).ready(function(){
    $('#btnInstitucion').click(function(e){
        e.preventDefault();
        defaultCountry = $('select[name=paisInstitucion]').val();

        $.ajax({
            url: 'institucion',
            method: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {'nombre':$('input[name=nombreInstitucion]').val(), 'country_id':$('select[name=paisInstitucion]').val(), 'web':$('input[name=webInstitucion]').val(), 'direccion':$('input[name=direccionInstitucion]').val()},
            success: function(data){
                $('#myModal').modal('hide'); // Cerrar Modal
                $('#alertGuardado').show(); // Mostrar alerta
                window.setTimeout(function() { // Desaparecer alerta despues de 3 seg
                    $("#alertGuardado").hide();
                }, 3000);

                //$('#optionsInstitucion').trigger("chosen:updated");
                var options = $('select[name=institucionGrado]');
                var options2 = $('select[name=paisGrado]');

                var options3 = $('select[name=institucion]');
                var options4 = $('select[name=pais]');

                options.empty();
                $.each(data, function(key, value) {
                    options.append("<option value='"+ key +"'>" + value + "</option>");
                    defaulfValue = key;
                });

                options3.empty();
                $.each(data, function(key, value) {
                    options3.append("<option value='"+ key +"'>" + value + "</option>");
                    defaulfValue2 = key;
                });

                options.val(defaulfValue);
                options2.val(defaultCountry);

                options3.val(defaulfValue2);
                options4.val(defaultCountry);

            }

        });
    });
});

// Añadir Proyecto
$(document).ready(function(){
    $('#btnAddProyecto').click(function(e){
        e.preventDefault();
        $.ajax({
            url: 'proyecto/add',
            method: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {'nombre':$('input[name=nombreProyecto]').val()},
            success: function(data){
                type = 'proyecto';
                $('#myModalProyecto').modal('hide'); // Cerrar Modal
                $('#alertGuardado').show(); // Mostrar alerta
                window.setTimeout(function() { // Desaparecer alerta despues de 3 seg
                    $("#alertGuardado").hide();
                }, 3000);


                $('#tableProyectos > tbody:last').append('<tr id=proyecto'+data['id']+'><td>'+data['name']+'</td><td class="col-md-1"> <a data-options={"id":"'+data.id+'","type":"'+type+'"} class="btn-block btn btn-danger pull-right openConfirmBtn" data-toggle="modal" data-target="#myModalDelProyecto">Eliminar</a> </td></tr>');
            }

        });
    });
});


// Añadir Publicacion
$(document).ready(function(){
    $('#btnAddPublicacion').click(function(e){
        e.preventDefault();
        $.ajax({
            url: 'publicacion/add',
            method: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {'nombre':$('input[name=nombrePublicacion]').val()},
            success: function(data){
                type = 'publicacion';
                $('#myModalPublicacion').modal('hide'); // Cerrar Modal
                $('#alertGuardado').show(); // Mostrar alerta
                window.setTimeout(function() { // Desaparecer alerta despues de 3 seg
                    $("#alertGuardado").hide();
                }, 3000);


                $('#tablePublicaciones > tbody:last').append('<tr id=publicacion'+data['id']+'><td>'+data['name']+'</td><td class="col-md-1"> <a data-options={"id":"'+data.id+'","type":"'+type+'"} class="btn-block btn btn-danger pull-right openConfirmBtn" data-toggle="modal" data-target="#myModalDelProyecto">Eliminar</a> </td></tr>');
            }

        });
    });
});

// Añadir Patente
$(document).ready(function(){
    $('#btnAddPatente').click(function(e){
        e.preventDefault();
        $.ajax({
            url: 'patente/add',
            method: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {'nombre':$('input[name=nombrePatente]').val(), 'situacion':$('select[name=situacionPatente] option:selected' ).text(), 'autores':$('input[name=autoresPatente]').val(), 'paises':$('input[name=paisesPatente]').val() },
            success: function(data){
                type = 'patente';
                $('#myModalPatente').modal('hide'); // Cerrar Modal
                $('#alertGuardado').show(); // Mostrar alerta
                window.setTimeout(function() { // Desaparecer alerta despues de 3 seg
                    $("#alertGuardado").hide();
                }, 3000);


                $('#tablePatentes > tbody:last').append('<tr id=patente'+data['id']+'><td>'+data['name']+'</td><td>'+data['situacion']+'</td><td>'+data['autores']+'</td><td>'+data['paises']+'</td><td class="col-md-1"> <a data-options={"id":"'+data.id+'","type":"'+type+'"} class="btn btn-danger pull-right openConfirmBtn btn-block" data-toggle="modal" data-target="#myModalDelProyecto">Eliminar</a> </td></tr>');
            }

        });
    });
});

// Añadir Vinculacion
$(document).ready(function(){
    $('#btnAddVinculacion').click(function(e){
        e.preventDefault();
        $.ajax({
            url: 'vinculacion/add',
            method: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {'nombre':$('input[name=nombreVinculacion]').val(), 'tipo':$('input[name=tipoVinculacion]').val() },
            success: function(data){
                type = 'vinculacion';
                $('#myModalVinculacion').modal('hide'); // Cerrar Modal
                $('#alertGuardado').show(); // Mostrar alerta
                window.setTimeout(function() { // Desaparecer alerta despues de 3 seg
                    $("#alertGuardado").hide();
                }, 3000);


                $('#tableVinculacion > tbody:last').append('<tr id=vinculacion'+data['id']+'><td>'+data['name']+'</td><td>'+data['type']+'</td><td class="col-md-1"> <a data-options={"id":"'+data.id+'","type":"'+type+'"} class="btn btn-danger pull-right openConfirmBtn btn-block" data-toggle="modal" data-target="#myModalDelProyecto">Eliminar</a> </td></tr>');
            }

        });
    });
});

// Añadir infraestructura
$(document).ready(function(){
    $('#btnAddEquipo').click(function(e){
        e.preventDefault();
        $.ajax({
            url: 'equipo/add',
            method: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {'nombre':$('input[name=nombreEquipo]').val(), 'marca':$('input[name=marcaEquipo]').val(), 'modelo':$('input[name=modeloEquipo]').val(), 'acceso':$('select[name=accesoEquipo] option:selected' ).text() },
            success: function(data){
                type = 'equipo';
                $('#myModalEquipo').modal('hide'); // Cerrar Modal
                $('#alertGuardado').show(); // Mostrar alerta
                window.setTimeout(function() { // Desaparecer alerta despues de 3 seg
                    $("#alertGuardado").hide();
                }, 3000);


                $('#tableEquipo > tbody:last').append('<tr id=equipo'+data['id']+'><td>'+data['name']+'</td><td>'+data['marca']+'</td><td>'+data['modelo']+'</td><td>'+data['acceso']+'</td><td class="col-md-1"><a data-options={"id":"'+data.id+'","type":"'+type+'"} class="btn btn-danger pull-right openConfirmBtn btn-block" data-toggle="modal" data-target="#myModalDelProyecto">Eliminar</a> </td></tr>');
            }

        });
    });
});

//Pasar valor al modal para confirmar eliminacion
$(document).on("click", ".openConfirmBtn", function () {
    datos = $(this).attr('data-options');
    datos = JSON.parse(datos);
    elementoId = datos['id'];
    elementoType = datos['type'];
    $('#delElemento').attr('data-options','{"id":"'+elementoId+'", "type":"'+elementoType+'"}');

});

// Borrar elemento de tabla
$(document).ready(function(){
    $('#delElemento').click(function(e){
        e.preventDefault();
        datos = $(this).attr('data-options');
        datos = JSON.parse(datos);
        elementoId = datos['id'];
        elementoType = datos['type'];

        $.ajax({
            url: elementoType+'/delete/'+elementoId,
            method: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {_method: 'delete'},
            success: function(data){
                $('#myModalDelProyecto').modal('hide'); // Cerrar Modal
                $('#alertBorrado').show(); // Mostrar alerta
                window.setTimeout(function() { // Desaparecer alerta despues de 3 seg
                    $("#alertBorrado").hide();
                }, 3000);


                $('#'+elementoType+elementoId).remove();
            }

        });
    });
});

// Ajax para agregar datos personales
$(document).ready(function() {
    $('#btnAddPersonales').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: 'personales/add',
            method: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {
                'curp': $('input[name=curp]').val(),
                'telefono': $('input[name=telefono]').val(),
                'genero': $('input[name=genero]:checked').val(),
                'grado': $('select[name=grado]').val(),
                'paisGrado': $('select[name=paisGrado]').val(),
                'institucionGrado': $('select[name=institucionGrado]').val(),
                'departamento': $('input[name=departamento]').val(),
                'nombramiento': $('input[name=nombramiento]').val(),
                'sni': $('select[name=sni]').val(),
                'prodep': $('select[name=prodep]').val(),
                'nombreProdep': $('input[name=nombreProdep]').val(),
                'areaPeciti': $('select[name=areaPeciti]').val(),
                'areaSni': $('select[name=areaSni]').val(),
                'areaConocimiento': $('select[name=areaConocimiento]').val(),
                'numeroRcea': $('input[name=numeroRcea]').val(),
                'numeroCvu': $('input[name=numeroCvu]').val(),
                'emailI': $('input[name=emailI]').val(),
                'emailP': $('input[name=emailP]').val()
            },
            success: function (data) {
                $('#alertGuardado').show(); // Mostrar alerta
                window.setTimeout(function () { // Desaparecer alerta despues de 3 seg
                    $("#alertGuardado").hide();
                }, 3000);

            }

        });
    });
});


// Ajax para agregar datos estudiante
$(document).ready(function() {
    $('#btnAddEstudiante').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: 'estudiante/add',
            method: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {
                'posgrado': $('select[name=posgrado]').val(),
                'programa': $('input[name=programa]').val(),
                'tutor': $('input[name=tutor]').val(),
                'proyecto': $('input[name=proyecto]').val()
            },
            success: function (data) {
                $('#alertGuardado').show(); // Mostrar alerta
                window.setTimeout(function () { // Desaparecer alerta despues de 3 seg
                    $("#alertGuardado").hide();
                }, 3000);

            }

        });
    });
});

// Guardar datos de infraestructura
$(document).ready(function() {

    $('#saveEquipo').click(function () {

        $('#alertGuardado').show(); // Mostrar alerta
        window.setTimeout(function () { // Desaparecer alerta despues de 3 seg
            $("#alertGuardado").hide();
        }, 3000);

    });

});



// Agregar div para grupo de investigación
$(document).ready(function() {
    if ($('#grupoInv').val()=='1')
        $('#divGrupo').removeClass('hidden');

    $('#grupoInv').change(function () {

       if ($(this).val()=='1')
           $('#divGrupo').removeClass('hidden');
       else
           $('#divGrupo').addClass('hidden');
    });

});

// Mostrar nombreProdep
$(document).ready(function() {
    if ($('#selectProdep').val()=='1')
        $('#nameProdep').removeClass('hidden');

    $('#selectProdep').change(function () {

        if ($(this).val()=='1')
            $('#nameProdep').removeClass('hidden');
        else
            $('#nameProdep').addClass('hidden');
    });

});


// Mostrar otros sectores
$(document).ready(function() {
    if ($('#sectores8').is(':checked'))
        $('#otrosSectoresDiv').removeClass('hidden');

    $('#sectores8').change(function () {

        if ($(this).is(':checked'))
            $('#otrosSectoresDiv').removeClass('hidden');
        else
            $('#otrosSectoresDiv').addClass('hidden');
    });

});

// Mostrar otras lineas
$(document).ready(function() {
    if ($('#lineas11').is(':checked'))
        $('#otrasLineasDiv').removeClass('hidden');

    $('#lineas11').change(function () {

        if ($(this).is(':checked'))
            $('#otrasLineasDiv').removeClass('hidden');
        else
            $('#otrasLineasDiv').addClass('hidden');
    });

});

// Añadir miembro de grupo
$(document).ready(function(){
    $('#btnAddMiembro').click(function(e){
        e.preventDefault();
        $.ajax({
            url: 'miembro/add',
            method: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {'nombre':$('input[name=nombreMiembro]').val(), 'curp':$('input[name=curpMiembro]').val(), 'grado':$('select[name=gradoMiembro] option:selected' ).text()},
            success: function(data){
                type = 'miembro';
                $('#myModalMiembro').modal('hide'); // Cerrar Modal
                $('#alertGuardado').show(); // Mostrar alerta
                window.setTimeout(function() { // Desaparecer alerta despues de 3 seg
                    $("#alertGuardado").hide();
                }, 3000);


                $('#tableMiembro > tbody:last').append('<tr id=miembro'+data['id']+'><td>'+data['nombre']+'</td><td>'+data['curp']+'</td><td>'+data['grado']+'</td><td class="col-md-1"><a data-options={"id":"'+data.id+'","type":"'+type+'"} class="btn btn-danger pull-right openConfirmBtn btn-block" data-toggle="modal" data-target="#myModalDelProyecto">Eliminar</a> </td></tr>');
            }

        });
    });
});

// Agregar datos pestaña institucion
$(document).ready(function() {
    $('#btnAddGrupo').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: 'grupo/add',
            method: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {
                'institucion': $('select[name=institucion]').val(),
                'pais': $('select[name=pais]').val(),
                'grupo': $('select[name=grupo]').val(),
                'departamento':$('input[name=departamento]').val(),
                'nombramiento':$('input[name=nombramiento]').val()
            },
            success: function (data) {
                $('#alertGuardado').show(); // Mostrar alerta
                window.setTimeout(function () { // Desaparecer alerta despues de 3 seg
                    $("#alertGuardado").hide();
                }, 3000);

            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }

        });
    });
});


// Ajax para agregar datos de la pestaña investigacion
/*$(document).ready(function() {
    $('#btnAddInvestigacion').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: 'investigacion',
            method: "POST",
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },


            data: {
                'lineas': $('input[name="lineas[]"]'),
                'sectores': $('input[name="sectores[]"]')
            },
            success: function (data) {
                $('#alertGuardado').show(); // Mostrar alerta
                window.setTimeout(function () { // Desaparecer alerta despues de 3 seg
                    $("#alertGuardado").hide();
                }, 3000);

            }

        });
    });
});*/


$(document).ready(function() {
    $('a[href="' + window.location.hash + '"]').tab('show');
});

// Cambiar select areas sni dinamicamente

$(document).ready(function() {
    var opciones = {'0':'n/a'}
    var opciones1 = {'0':'Biología', '1':'Bioquimica', '2':'Ciencias de la Vida', '3':'Contaminación Ambiental', '4':'Investigación Biomédica Básica', '5':'Química' };
    var opciones2 = {'0':'Agropecuarias', '1':'Biotecnología', '2':'Bosques y Maderas', '3':'Ciencias Agrarias', '4':'Medicina Veterinaria', '5':'Silvicultura', '6':'Tecnología de Alimentos', '7':'Zootecnia' };
    var opciones3 = {'0':'Astronomía', '1':'Astronomía y Astrofísica', '2':'Ciencias de la Tierra y el Espacio', '3':'Ciencias del Mar', '4':'Física', '5':'Fotogametría y Geodesia', '6':'Geofísica', '7':'Geografía' };
    var opciones4 = {'0':'Administración', '1':'Ciencia Política', '2':'Ciencias Económicas', '3':'Ciencias Jurídicas y Derecho', '4':'Ciencias Políticas', '5':'Demografía', '6':'Derecho', '7':'Economía' };
    var opciones5 = {'0':'Antropología', '1':'Arqueología', '2':'Arquitectura', '3':'Ciencias de las Artes y las Letras', '4':'Ética', '5':'Filosofía', '6':'Historia', '7':'Lingüística' };
    var opciones6 = {'0':'Ciencias Tecnológicas', '1':'Computación', '2':'Diseño Industrial', '3':'Ingeniería Civil', '4':'Ingeniería de Sistemas', '5':'Ingeniería de Telecomunicaciones', '6':'Ingeniería Eléctrica', '7':'Ingeniería Electrónica' };
    var opciones7 = {'0':'Ciencias Médicas', '1':'Medicina', '2':'Odontología'};

    var options = $('select[name=areaConocimiento]');

    $('#areaSni').change(function () {
        options.empty();
        if ($(this).val()=='0') {
            $.each(opciones, function (key, value) {
                options.append("<option value='" + key + "'>" + value + "</option>");
            });
        }
        if ($(this).val()=='1') {
            $.each(opciones1, function (key, value) {
                options.append("<option value='" + key + "'>" + value + "</option>");
            });
        }
        if ($(this).val()=='2') {
            $.each(opciones2, function (key, value) {
                options.append("<option value='" + key + "'>" + value + "</option>");
            });
        }
        if ($(this).val()=='3') {
            $.each(opciones3, function (key, value) {
                options.append("<option value='" + key + "'>" + value + "</option>");
            });
        }
        if ($(this).val()=='4') {
            $.each(opciones4, function (key, value) {
                options.append("<option value='" + key + "'>" + value + "</option>");
            });
        }
        if ($(this).val()=='5') {
            $.each(opciones5, function (key, value) {
                options.append("<option value='" + key + "'>" + value + "</option>");
            });
        }
        if ($(this).val()=='6') {
            $.each(opciones6, function (key, value) {
                options.append("<option value='" + key + "'>" + value + "</option>");
            });
        }
        if ($(this).val()=='7') {
            $.each(opciones7, function (key, value) {
                options.append("<option value='" + key + "'>" + value + "</option>");
            });
        }
    });

});