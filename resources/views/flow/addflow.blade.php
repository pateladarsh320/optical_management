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
                        <input type="text" id="flow_name" class="form-control" name="flow_name" value="{{$flow->flow_title}}">
                    </div>
                </div>
            </div>
        </div>

        <!-- Subform 2 -->
        <div class="subform" id="subform2">
            @foreach($prescriptions as $prescription)
            <h3>Prescription Type</h3>
            <div id="subform2-fields">   
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Prescription Type</label>
                    <div class="col-sm-10">
                        <select id="prescription_type" name="prescription_type" class="form-control">
                            <option value="All" @if($prescription->prescription_type == 'All') selected @endif>Select</option>
                            <option value="1" @if($prescription->prescription_type == 1) selected @endif>Prescription</option>
                            <option value="2" @if($prescription->prescription_type == 2) selected @endif>Non-Prescription</option>
                            <option value="3" @if($prescription->prescription_type == 3) selected @endif>Reader</option>
                        </select>
                    </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Display Title</label>
                    <div class="col-sm-10">
                        <input type="text" id="prescription_display_title" value="{{$prescription->display_title}}" class="form-control" name="prescription_display_title">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" id="prescription_display_description" value="{{$prescription->prescription_description}}" class="form-control" name="prescription_display_description">
                    </div>
                </div>
               
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary text-center" onclick="addPrescription()">Add Prescription Type</button>
            </div>
            @endforeach
    </form>  
  
            <div class="subform" id="subform3">
              
                @foreach($lensGroups as $lensGroup)
                <form id="addlencegroupform">   
                    <input type="hidden" id="presciptionId" value="2">  
                    <h3>Lense Group</h3>
                    <div id="subform3-fields">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Display Title</label>
                            <div class="col-sm-10">
                                <input type="text" id="lensgroup_title" value="{{$lensGroup->display_title}}" class="form-control" name="lensgroup_title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" id="lensgroup_description" value="{{$lensGroup->prescription_description}}" class="form-control" name="lensgroup_description">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary" onclick="addLenseGroup()">Add Lens Group</button>
                    </div>
                </form>
                @endforeach  
                <div class="subform" id="subform3">
                    <h3>Lens Product Form</h3>
                    <form id="addlensproductform">
                        <div id="subform3-fields">
                        
                            <input type="hidden" id="groupId" value="2">
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
                    <!--add Index -->
                    <div class="subform" id="subform3">
                        <h3>Lens Index</h3>
                        <form id="addlensproductIndexform">
                            <div id="subform3-fields">
                                <input type="hidden" id="lensproductId" value="3">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Index Prize</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="index_prize" class="form-control" name="index_prize">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Recomnded</label>
                                    <div class="col-sm-10">
                                        <input type="checkbox" id="product_recomnded" class="form-control" name="product_recomnded">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Index Type</label>
                                    <select id="product_indextype" name="product_indextype" class="form-control">
                                        <option value="All">Select</option>
                                        <option value="1" >Prescription</option>
                                        <option value="2">Non-Prescription</option>
                                        <option value="3">Reader</option>
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
                    <!--add reflecting coat -->
                    <div class="subform" id="subform3">
                        <h3>Anti Reflecting Coat</h3>
                        <form id="addlensproductIndexform">
                            <div id="subform3-fields">
                                <input type="hidden" id="lensproductId" value="3">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Prize</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="reflectindex_prize" class="form-control" name="index_prize">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Recomnded</label>
                                    <div class="col-sm-10">
                                        <input type="checkbox" id="reflect_recomnded" class="form-control" name="product_recomnded">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">AR Coating Type</label>
                                    <select id="product_indextype" name="reflectCoting_type" class="form-control" name="reflectCoting_type">
                                        <option value="All">Select</option>
                                        <option value="1" >Prescription</option>
                                        <option value="2">Non-Prescription</option>
                                        <option value="3">Reader</option>
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
                                <button type="button" class="btn btn-primary" onclick="addLenseIndex()">Add Lens Index</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
    
            <!-- Subform 4 -->
            <div class="subform" id="subform4">
                <h3>Add Clip Ons</h3>
                <div id="subform4-fields">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Field 1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="subform4[]">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="addField('subform4')">Add Field</button>
            </div>
            <!-- Subform 3 -->
            <div class="subform" id="subform3">
                <h3>Add Engraving</h3>
                <div id="subform3-fields">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Display Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="subform3[]">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="subform3[]">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="addField('subform3')">Add Field</button>
            </div>

            <!-- Subform 4 -->
            <div class="subform" id="subform4">
                <h3>Add Frames</h3>
                <div id="subform4-fields">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Field 1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="subform4[]">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="addField('subform4')">Add Field</button>
            </div>
        </div>

    {{-- <!-- Subform 3 -->
    <div class="subform" id="subform3">
        <h3>Subform 3</h3>
        <div id="subform3-fields">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Display Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="subform3[]">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="subform3[]">
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" onclick="addField('subform3')">Add Field</button>
    </div>

    <!-- Subform 4 -->
    <div class="subform" id="subform4">
        <h3>Subform 4</h3>
        <div id="subform4-fields">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Field 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="subform4[]">
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" onclick="addField('subform4')">Add Field</button>
    </div>

    <!-- Subform 5 -->
    <div class="subform" id="subform5">
        <h3>Subform 5</h3>
        <div id="subform5-fields">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Field 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="subform5[]">
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" onclick="addField('subform5')">Add Field</button>
    </div> --}}
</div>

<!-- Bootstrap and jQuery JS -->
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
    var presciptionId = $('#presciptionId').val();
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
            var flowTitle = response.newflow.flow_title;
            alert("Added new LensGroup");
        },
        error: function(error) {
            console.error('Error submitting form:', error);
        }
    });
}

function addLenseProduct() {
    var formData = $('#addlensproductform').serializeArray();
    var groupId = $('#groupId').val();
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

    data.groupId  = groupId;
    data._token  = csrf;

    $.ajax({
        type: 'post',
        url: '{{ route('lensproduct.addprocess') }}',
        data: data,
        success: function(response) {
            var flowTitle = response.newflow.flow_title;
            alert("Added new LensGroup");
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

    $.ajax({
        type: 'post',
        url: '{{ route('lensproductindex.addprocess') }}',
        data: data,
        success: function(response) {
            var flowTitle = response.newflow.flow_title;
            alert("Added new LensGroup");
        },
        error: function(error) {
            console.error('Error submitting form:', error);
        }
    });
}

// // Attach the addPrescription function to the form's submit event
// $('#addprescriptionform').on('submit', function(event) {
//     event.preventDefault(); // Prevent default form submission
//     addPrescription(); // Call the addPrescription function
// });

 
</script>

</body>
</html>
