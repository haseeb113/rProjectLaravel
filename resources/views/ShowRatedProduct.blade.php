@extends('../../Layout/MasterLayout')
@Section('showRproduct')
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
                            <th class="column-title">Comments</th>
                            <th class="column-title">Rating Stars </th>
                        
                            <th class="column-title">Reviewed By </th>
                            
                           
                           
                          </tr>
                        </thead>

                        <tbody>
                            @if($data)
                            @foreach($data as $value)
                          <tr class="even pointer">
                            
                            <td class=" ">{{$value->ProductID}}</td>
                            <td class=" ">{{$value->ProductName}}</td>
                            <td class=" ">{{$value->Comments}} </td>
                            <td class=" ">{{$value->RatingStars}}</td>
                           
                             <td class=" ">{{$value->ReviewedBy}}</td>
                            
                          </tr>
                         
                         @endforeach
                         @else
                         <tr>
                            <td>No Product Reviewed </td>
                         </tr>
                         @endif
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
@stop