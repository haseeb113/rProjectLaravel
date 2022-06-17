@extends('../../Layout/MasterLayout')
@Section('addproduct')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Product</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>


                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form id="demo-form2" class="form-horizontal form-label-left" action="{{url('saveproduct')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="ProductID" value="{{$posteddata['ProductID']?? ''}}">
                    @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible " role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
</button>
{{session()->get('error')}}
</div>
      
                    @endif
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Product Category</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" name="ProductCategory">
                                <option value="">Choose option</option>
                                <option value="Woman Fashion" @if(!empty($posteddata['ProductCategory']) && $posteddata['ProductCategory'] == 'Woman Fashion')selected @endif >Woman Fashion</option>
                                <option value="Electronics" @if(!empty($posteddata['ProductCategory']) && $posteddata['ProductCategory'] == 'Electronics')selected @endif>Electronics</option>
                                <option value="Bueaty Products" @if(!empty($posteddata['ProductCategory']) && $posteddata['ProductCategory'] == 'Bueaty Products')selected @endif>Bueaty Products</option>
                                <option value="Men Fashion" @if(!empty($posteddata['ProductCategory']) && $posteddata['ProductCategory'] == 'Men Fashion')selected @endif>Men Fashion</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" value="{{$posteddata['ProductName'] ?? ''}}" name="ProductName" style="width: 757px; " class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Price
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="Price" style="width: 757px; " value="{{$posteddata['Price']?? ''}}"  class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Details/Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="message"name="Details"  style="width: 757px; height: 59px;" value="">
                            {{$posteddata['Details'] ?? ''}}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Choose Product Image</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <input type="file"  name="ProductImage">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <input type="checkbox" name="Status" value="{{$posteddata['Status']?? ''}}">
                    </div> -->
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                            <button type="submit" class="btn btn-success">ADD PRODUCT</button>
                           

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@stop