@extends('../../Layout/MasterLayout')
@Section('showproduct')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Displaying Product List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">Product ID </th>
                            <th class="column-title">Product Name </th>
                            <th class="column-title">Price </th>
                            <th class="column-title">Product Details </th>
                            <th class="column-title">Product Image </th>
                            <th class="column-title">Added By </th>
                            <!-- <th class="column-title">Status</th> -->
                            <th class="column-title">Created at</th>
                            <!-- <th class="column-title">Review Count</th> -->
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                           
                          </tr>
                        </thead>

                        <tbody>
                            @if($data)
                            @foreach($data as $value)
                          <tr class="even pointer">
                            
                            <td class=" ">{{$value->ProductID}}</td>
                            <td class=" ">{{$value->ProductName}}</td>
                            <td class=" ">Rs.{{$value->Price}} </td>
                            <td class=" ">{{$value->Details}}</td>
                            <td class=" ">
                                <img src="images/{{$value->ProductImage}}" width="50" height="50" alt="">
                            </td>
                            <td class="a-right a-right ">{{$value->AddedBy}}</td>
                            <!-- <td class="a-right a-right ">{{$value->Status}}</td> -->
                            <td class="a-right a-right">{{$value->created_at}} </td>
                            <!-- <td class="a-right a-right">{{$value->ReviewCount}}</td> -->
                            <td class=" last"><a class="btn btn-primary" href="{{"edit/".$value['ProductID']}}">Edit</a>
                            <a class="btn btn-primary" href="{{"delete/".$value['ProductID']}}">Delete</a>
                            </td>
                          </tr>
                         
                         @endforeach
                         @else
                         <tr>
                            <td>No Product Found</td>
                         </tr>
                         @endif
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
@stop