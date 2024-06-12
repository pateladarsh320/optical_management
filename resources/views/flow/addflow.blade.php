<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Subforms with Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .subform {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Main Form</h1>

    <!-- Subform 1 form 1-->
    <form id="addprescriptionform">
        <div class="subform" id="subform1">
            <h3>Creat Flow</h3>
            <div id="subform1-fields">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Flow name</label>
                    <div class="col-sm-10">
                        <input type="text" id="flow_name" class="form-control" name="flow_name" value="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Subform 2 -->
        <div class="subform" id="subform2">
           
            <h3>Prescription Type</h3>
            <div id="subform2-fields">   
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Prescription Type</label>
                    <div class="col-sm-10">
                        <select id="prescription_type" name="prescription_type" class="form-control">
                            <option value="All" >Select</option>
                            <option value="1" >Prescription</option>
                            <option value="2" >Non-Prescription</option>
                            <option value="3" >Reader</option>
                        </select>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Display Title</label>
                    <div class="col-sm-10">
                        <input type="text" id="prescription_display_title" value="" class="form-control" name="prescription_display_title">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" id="prescription_display_description" value="" class="form-control" name="prescription_display_description">
                    </div>
                </div>
               
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary text-center" onclick="addPrescription()">Add Prescription Type</button>
            </div>
        
    </form>  
  
            <div class="subform" id="subform3">
              
               
                <form id="addlencegroupform">   
                    <input type="hidden" id="presciptionIdLensGroup" value="1">  
                    <h3>Lense Group</h3>
                    <div id="subform3-fields">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Display Title</label>
                            <div class="col-sm-10">
                                <input type="text" id="lensgroup_title" value="" class="form-control" name="lensgroup_title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" id="lensgroup_description" value="" class="form-control" name="lensgroup_description">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary" onclick="addLenseGroup()">Add Lens Group</button>
                    </div>
                </form>
              
                <div class="subform" id="subform3">
                    <h3>Lens Product Form</h3>
                    <form id="addlensproductform">
                        <div id="subform3-fields">
                        
                            <input type="hidden" id="lensgroupId" value="1">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Display Title</label>
                                <div class="col-sm-10">
                                    <input type="text" id="lensproduct_title" class="form-control" name="lensproduct_title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" id="lensproduct_description" class="form-control" name="lensproduct_description">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary" onclick="addLenseProduct()">Add Lens Product</button>
                        </div>
                    </form>
                    <!--lens Index form -->
                    <div class="subform" id="subform3">
                        <h3>Lens Index</h3>
                        <form id="addlensproductIndexform">
                            <div id="subform3-fields">
                                <input type="hidden" id="lensproductId" value="1">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Index Prize</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="index_prize" class="form-control" name="index_prize">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Recomnded</label>
                                    <div class="col-sm-10">
                                        <input type="checkbox" id="product_recomnded" class="form-control" name="product_recomnded" value="2" onclick="updateCheckboxValue()">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Index Type</label>
                                    <select id="product_indextype" name="product_indextype" class="form-control">
                                        <option value="All">Select</option>
                                        <option value="1" >Basic</option>
                                        <option value="2">Premium</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Index Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="product_indexName" class="form-control" name="product_indexName">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="product_description" class="form-control" name="product_description">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" onclick="addLenseIndex()">Add Lens Index</button>
                            </div>
                        </form>
                        <!--anti reflecting coat -->
                        <div class="subform" id="subform3">
                            <h3>Anti Reflecting Coat</h3>
                            <form id="addlensreflectform">
                                <div id="subform3-fields">
                                    <input type="hidden" id="lensindex_id" value="1">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Select Type</label>
                                        <div class="col-sm-10">
                                            <input type="radio" id="antireflectingcoat" name="coating" value="1">
                                            <label for="anti-reflecting-coat">Anti-Reflecting Coat</label><br>
                                            
                                            <input type="radio" id="tint" name="coating" value="2">
                                            <label for="tint">Tint</label><br>
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="reflectindex_price" class="form-control" name="reflectindex_price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Recomnded</label>
                                        <div class="col-sm-10">
                                            <input type="checkbox" id="reflect_recomnded" class="form-control" name="reflect_recomnded" value="2" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">AR Coating Type</label>
                                        <select id="reflectCoting_type" name="reflectCoting_type" class="form-control" name="reflectCoting_type">
                                            <option value="All">Select</option>
                                            <option value="1">Standard</option>
                                            <option value="2">Advanced</option>
                                            <option value="3">Premium</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">AR Coating Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="reflectCoating_Name" class="form-control" name="reflectCoating_Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="reflect_description" class="form-control" name="reflect_description">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary" onclick="addLensReflect()">Add Reflect</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- clip form -->
            <div class="subform" id="subform4">
                <h3>Add Clip Ons</h3>
                <form id="addclipform">
                    <div id="subform3-fields">
                        <input type="hidden" id="lensproductId" value="3">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Clip-On-Price</label>
                            <div class="col-sm-10">
                                <input type="text" id="clip_price" class="form-control" name="clip_price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Clip on Quantity</label>
                            <div class="col-sm-10">
                                <input type="text" id="clip_quantity" class="form-control" name="clip_quantity">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Clip-on Type</label>
                            <select id="product_indextype" name="clip_type" class="form-control" name="clip_type">
                                <option value="All">Select</option>
                                <option value="1" >Prescription</option>
                                <option value="2">Non-Prescription</option>
                                <option value="3">Reader</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Clip on Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="clip_Name" class="form-control" name="clip_Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Add Image</label>
                            <div class="col-sm-10">
                                <input type="file" id="clip_image" class="form-control" name="clip_image">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary" onclick="addClipOns()">Add Clip Ons</button>
                    </div>
                </form>
            </div>
            <!-- Engraving form-->
            <div class="subform" id="subform3">
                <h3>Add Engraving</h3>
                <form id="addEngraving">
                <div id="subform3-fields">
                    <input type="hidden" id="presciptionIdEngraving" value="1">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Personalize Your frames</label>
                        <div class="col-sm-10">
                            <input type="text" id="engraving_frame" class="form-control" name="engraving_frame">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="text" id="engravingprice" class="form-control" name="engravingprice">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary" onclick="addLenseEngraving()">Add Engraving</button>
                </div>
                </form>
            </div>

            <!-- Frams form -->
            <div class="subform" id="subform4">
                <h3>Add Frames</h3>
                <form id="addframform">
                    <div id="subform3-fields">
                        <input type="hidden" id="lensproductframeId" value="3">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Clip-On-Price</label>
                            <div class="col-sm-10">
                                <input type="text" id="clip_price1" class="form-control" name="clip_price1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Clip on Quantity</label>
                            <div class="col-sm-10">
                                <input type="text" id="clip_quantity1" class="form-control" name="clip_quantity1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Clip-on Type</label>
                            <select id="product_indextype" name="clip_type1" class="form-control" name="clip_type1">
                                <option value="All">Select</option>
                                <option value="1" >Prescription</option>
                                <option value="2">Non-Prescription</option>
                                <option value="3">Reader</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Clip on Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="clip_Name11" class="form-control" name="clip_Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Add Image</label>
                            <div class="col-sm-10">
                                <input type="file" id="clip_image1" class="form-control" name="clip_image1">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary" onclick="addLenseFrame()">Add Clip Ons</button>
                    </div>
                </form>
            </div>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
function addPrescription() {
    var formData = $('#addprescriptionform').serializeArray();
    var data = {};

    $.each(formData, function() {
        if (data[this.name]) {
            if (!Array.isArray(data[this.name])) {
                data[this.name] = [data[this.name]];
            }
            data[this.name].push(this.value);
        } else {
            data[this.name] = this.value;
        }
    });
    var csrf = $('meta[name="csrf-token"]').attr('content');

 
    data._token  = csrf;
    // console.log(data);

    $.ajax({
        type: 'post',
        url: '{{ route('presciption.addprocess') }}',
        data: data,
        success: function(response) {
            var flowTitle = response.newflow.flow_title;
            alert("Added new prescription");
        },
        error: function(error) {
            console.error('Error submitting form:', error);
        }
    });
}

function addLenseGroup() {
    var formData = $('#addlencegroupform').serializeArray();
    var presciptionId = $('#presciptionIdLensGroup').val();
    var data = {};

    $.each(formData, function() {
        if (data[this.name]) {
            if (!Array.isArray(data[this.name])) {
                data[this.name] = [data[this.name]];
            }
            data[this.name].push(this.value);
        } else {
            data[this.name] = this.value;
        }
    });
    var csrf = $('meta[name="csrf-token"]').attr('content');

    data.presciptionId  = presciptionId;
    data._token  = csrf;

    $.ajax({
        type: 'post',
        url: '{{ route('lensgroup.addprocess') }}',
        data: data,
        success: function(response) {
            alert("Added new LensGroup");
            // var flowTitle = response.newflow.flow_title;
          
        },
        error: function(error) {
            console.error('Error submitting form:', error);
        }
    });
}

function addLenseProduct() {
    var formData = $('#addlensproductform').serializeArray();
    var lensgroupId = $('#lensgroupId').val();
    var data = {};

    $.each(formData, function() {
        if (data[this.name]) {
            if (!Array.isArray(data[this.name])) {
                data[this.name] = [data[this.name]];
            }
            data[this.name].push(this.value);
        } else {
            data[this.name] = this.value;
        }
    });
    var csrf = $('meta[name="csrf-token"]').attr('content');

    data.lensgroupId  = lensgroupId;
    data._token  = csrf;

    $.ajax({
        type: 'post',
        url: '{{ route('lensproduct.addprocess') }}',
        data: data,
        success: function(response) {
            alert("Added new Lens Product");
        },
        error: function(error) {
            console.error('Error submitting form:', error);
        }
    });
}

function addLenseIndex() {
    var formData = $('#addlensproductIndexform').serializeArray();
    var lensproductId = $('#lensproductId').val();
    var data = {};

    $.each(formData, function() {
        if (data[this.name]) {
            if (!Array.isArray(data[this.name])) {
                data[this.name] = [data[this.name]];
            }
            data[this.name].push(this.value);
        } else {
            data[this.name] = this.value;
        }
    });
    var csrf = $('meta[name="csrf-token"]').attr('content');

    data.lensproductId  = lensproductId;
    data._token  = csrf;

    var product_recomnded = document.getElementById('product_recomnded');
    if (product_recomnded.checked) {
        data.product_recomnded = '1';
    } else {
        data.product_recomnded = '2';
    }

    $.ajax({
        type: 'post',
        url: '{{ route('lensproductindex.addprocess') }}',
        data: data,
        success: function(response) {
            alert("Added new Lens Index");
        },
        error: function(error) {
            console.error('Error submitting form:', error);
        }
    });
}

function addLensReflect() {
    var formData = $('#addlensreflectform').serializeArray();
    var lensindex_id  = $('#lensindex_id').val();
    var data = {};

    $.each(formData, function() {
        if (data[this.name]) {
            if (!Array.isArray(data[this.name])) {
                data[this.name] = [data[this.name]];
            }
            data[this.name].push(this.value);
        } else {
            data[this.name] = this.value;
        }
    });
    var csrf = $('meta[name="csrf-token"]').attr('content');

    data.lensindex_id   = lensindex_id ;
    data._token  = csrf;

    var reflect_recomnded = document.getElementById('reflect_recomnded');
    if (reflect_recomnded.checked) {
        data.reflect_recomnded = '1';
    } else {
        data.reflect_recomnded = '2';
    }

    $.ajax({
        type: 'post',
        url: '{{ route('reflect.addprocess') }}',
        data: data,
        success: function(response) {
            alert("Added new Lens Reflect Index");
        },
        error: function(error) {
            console.error('Error submitting form:', error);
        }
    });
}

function addLenseEngraving() {
    var formData = $('#addEngraving').serializeArray();
    var presciptionIdEngraving  = $('#presciptionIdEngraving').val();
    var data = {};

    $.each(formData, function() {
        if (data[this.name]) {
            if (!Array.isArray(data[this.name])) {
                data[this.name] = [data[this.name]];
            }
            data[this.name].push(this.value);
        } else {
            data[this.name] = this.value;
        }
    });
    var csrf = $('meta[name="csrf-token"]').attr('content');

    data.presciptionIdEngraving   = presciptionIdEngraving ;
    data._token  = csrf;

    $.ajax({
        type: 'post',
        url: '{{ route('engraving.addprocess') }}',
        data: data,
        success: function(response) {
            alert("Added new Lens Engraving");
        },
        error: function(error) {
            console.error('Error submitting form:', error);
        }
    });
}

function addLenseFrame() {
    var formData = $('#addframform').serializeArray();
    var lensproductframeId  = $('#lensproductframeId').val();
    var data = {};

    $.each(formData, function() {
        if (data[this.name]) {
            if (!Array.isArray(data[this.name])) {
                data[this.name] = [data[this.name]];
            }
            data[this.name].push(this.value);
        } else {
            data[this.name] = this.value;
        }
    });
    var csrf = $('meta[name="csrf-token"]').attr('content');

    data.lensproductframeId   = lensproductframeId ;
    data._token  = csrf;

    $.ajax({
        type: 'post',
        url: '{{ route('frame.addprocess') }}',
        data: data,
        success: function(response) {
            alert("Added new Lens Engraving");
        },
        error: function(error) {
            console.error('Error submitting form:', error);
        }
    });
}


 
</script>

</body>
</html>
