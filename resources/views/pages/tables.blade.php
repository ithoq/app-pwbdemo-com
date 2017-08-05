@extends('layouts.master')

@section('content')

    <!-- START PAGE CONTENT -->
    <div class="content ">
        <!-- MODAL STICK UP  -->
        <div class="modal fade stick-up" id="addNewAppModal" tabindex="-1" role="dialog" aria-labelledby="addNewAppModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header clearfix ">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                        </button>
                        <h4 class="p-b-5"><span class="semi-bold">New</span> App</h4>
                    </div>
                    <div class="modal-body">
                        <p class="small-text">Create a new app using this form, make sure you fill them all</p>
                        <form role="form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>name</label>
                                        <input id="appName" type="text" class="form-control" placeholder="Name of your app">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>Description</label>
                                        <input id="appDescription" type="text" class="form-control" placeholder="Tell us more about it">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Price</label>
                                        <input id="appPrice" type="text" class="form-control" placeholder="your price">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Notes</label>
                                        <input id="appNotes" type="text" class="form-control" placeholder="a note">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="add-app" type="button" class="btn btn-primary  btn-cons">Add</button>
                        <button type="button" class="btn btn-cons" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- START JUMBOTRON -->
        <div class="jumbotron" data-pages="parallax">
            <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                <div class="inner">
                    <!-- START BREADCRUMB -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                    <!-- END BREADCRUMB -->
                    <div class="row">
                        <div class="col-xl-7 col-lg-6 ">
                            <!-- START card -->
                            <div class="full-height">
                                <div class="card-block text-center">
                                    <img class="image-responsive-height demo-mw-600" src="assets/img/demo/tables.jpg" alt="">
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                        <div class="col-xl-5 col-lg-6 ">
                            <!-- START card -->
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title">Getting started
                                    </div>
                                </div>
                                <div class="card-block">
                                    <h3>Easier than finding a needle in the haystack.</h3>
                                    <p>Sharing the same stylized design layout, these tables allows for the effective compilation and organization of data with easy access and maneuverability for users. </p>
                                    <p class="small hint-text m-t-5">VIA senior product manage
                                        <br> for UI/UX at REVOX</p>
                                    <br>
                                    <button class="btn btn-primary btn-cons">More</button>
                                </div>
                            </div>
                            <!-- END card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END JUMBOTRON -->
        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid   container-fixed-lg bg-white">
            <!-- START card -->
            <div class="card card-transparent">
                <div class="card-header ">
                    <div class="card-title">Pages Default Tables Style
                    </div>
                    <div class="pull-right">
                        <div class="col-xs-12">
                            <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="card-block">
                    <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Places</th>
                            <th>Activities</th>
                            <th>Status</th>
                            <th>Last Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>First Tour</p>
                            </td>
                            <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                            </td>
                            <td class="v-align-middle">
                                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Public</p>
                            </td>
                            <td class="v-align-middle">
                                <p>April 13,2014 10:13</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>Among the children</p>
                            </td>
                            <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                            </td>
                            <td class="v-align-middle">
                                <p>you want English, Scottish, Welsh, Irish, British, European or UK even a British (name other original country you came form or have roots to E.G. A British Japanese or a 5th generation
                                </p>
                            </td>
                            <td class="v-align-middle">
                                <p>Public</p>
                            </td>
                            <td class="v-align-middle">
                                <p>April 13,2014 10:13</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>A day to remember</p>
                            </td>
                            <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                            </td>
                            <td class="v-align-middle">
                                <p>UK was on top of the art world 18-19 century had the best food, best cloths and best entertainment back then) it was a hyper nation</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Public</p>
                            </td>
                            <td class="v-align-middle">
                                <p>April 13,2014 10:13</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>Life’s sadness shared</p>
                            </td>
                            <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                            </td>
                            <td class="v-align-middle">
                                <p>he world speaks English. Common law, Magna Carta and the Bill of Rights are its wonderful legacy
                                </p>
                            </td>
                            <td class="v-align-middle">
                                <p>Public</p>
                            </td>
                            <td class="v-align-middle">
                                <p>April 13,2014 10:13</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>First Tour</p>
                            </td>
                            <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                            </td>
                            <td class="v-align-middle">
                                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Public</p>
                            </td>
                            <td class="v-align-middle">
                                <p>April 13,2014 10:13</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>First Tour</p>
                            </td>
                            <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                            </td>
                            <td class="v-align-middle">
                                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Public</p>
                            </td>
                            <td class="v-align-middle">
                                <p>April 13,2014 10:13</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>First Tour</p>
                            </td>
                            <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                            </td>
                            <td class="v-align-middle">
                                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Public</p>
                            </td>
                            <td class="v-align-middle">
                                <p>April 13,2014 10:13</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>First Tour</p>
                            </td>
                            <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                            </td>
                            <td class="v-align-middle">
                                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Public</p>
                            </td>
                            <td class="v-align-middle">
                                <p>April 13,2014 10:13</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>First Tour</p>
                            </td>
                            <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                            </td>
                            <td class="v-align-middle">
                                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Public</p>
                            </td>
                            <td class="v-align-middle">
                                <p>April 13,2014 10:13</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>First Tour</p>
                            </td>
                            <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                            </td>
                            <td class="v-align-middle">
                                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Public</p>
                            </td>
                            <td class="v-align-middle">
                                <p>April 13,2014 10:13</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>First Tour</p>
                            </td>
                            <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                            </td>
                            <td class="v-align-middle">
                                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Public</p>
                            </td>
                            <td class="v-align-middle">
                                <p>April 13,2014 10:13</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle semi-bold">
                                <p>First Tour</p>
                            </td>
                            <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a><a href="#" class="btn btn-tag">India</a>
                                <a href="#" class="btn btn-tag">China</a><a href="#" class="btn btn-tag">Africa</a>
                            </td>
                            <td class="v-align-middle">
                                <p>it is more then ONE nation/nationality as its fall name is The United Kingdom of Great Britain and North Ireland..</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Public</p>
                            </td>
                            <td class="v-align-middle">
                                <p>April 13,2014 10:13</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END card -->
        </div>
        <!-- END CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid   container-fixed-lg">
            <!-- START card -->
            <div class="card card-transparent">
                <div class="card-header ">
                    <div class="card-title">Table with Dynamic Rows
                    </div>
                    <div class="pull-right">
                        <div class="col-xs-12">
                            <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add row
                            </button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="card-block">
                    <table class="table table-hover demo-table-dynamic table-responsive-block" id="tableWithDynamicRows">
                        <thead>
                        <tr>
                            <th>App name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Notes</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="v-align-middle">
                                <p>Hyperlapse</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Description goes here</p>
                            </td>
                            <td class="v-align-middle">
                                <p>FREE</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Notes go here</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle">
                                <p>Facebook</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Description goes here</p>
                            </td>
                            <td class="v-align-middle">
                                <p>FREE</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Notes go here</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle">
                                <p>Twitter</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Description goes here</p>
                            </td>
                            <td class="v-align-middle">
                                <p>FREE</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Notes go here</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle">
                                <p>Foursquare</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Description goes here</p>
                            </td>
                            <td class="v-align-middle">
                                <p>FREE</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Notes go here</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="v-align-middle">
                                <p>Angry Birds</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Description goes here</p>
                            </td>
                            <td class="v-align-middle">
                                <p>FREE</p>
                            </td>
                            <td class="v-align-middle">
                                <p>Notes go here</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END card -->
        </div>
        <!-- END CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid   container-fixed-lg bg-white">
            <!-- START card -->
            <div class="card card-transparent">
                <div class="card-header  d-flex justify-content-between">
                    <div class="card-title">Table with export options
                    </div>
                    <div class="export-options-container"></div>
                    <!-- <div class="clearfix"></div> -->
                </div>
                <div class="card-block">
                    <table class="table table-striped" id="tableWithExportOptions">
                        <thead>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center"> 4</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="even gradeC">
                            <td>Trident</td>
                            <td>Internet Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td class="center">5</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 5.5</td>
                            <td>Win 95+</td>
                            <td class="center">5.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 6</td>
                            <td>Win 98+</td>
                            <td class="center">6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 7</td>
                            <td>Win XP SP2+</td>
                            <td class="center">7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="even gradeA">
                            <td>Trident</td>
                            <td>AOL browser (AOL desktop)</td>
                            <td>Win XP</td>
                            <td class="center">6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 2.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 3.0</td>
                            <td>Win 2k+ / OSX.3+</td>
                            <td class="center">1.9</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Camino 1.0</td>
                            <td>OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Camino 1.5</td>
                            <td>OSX.3+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape 7.2</td>
                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape Browser 8</td>
                            <td>Win 98SE+</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape Navigator 9</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.0</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.1</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.1</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.2</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.2</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.3</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.3</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.4</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.4</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.5</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.6</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.7</td>
                            <td>Win 98+ / OSX.1+</td>
                            <td class="center">1.7</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.8</td>
                            <td>Win 98+ / OSX.1+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Seamonkey 1.1</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Epiphany 2.20</td>
                            <td>Gnome</td>
                            <td class="center">1.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>Safari 1.2</td>
                            <td>OSX.3</td>
                            <td class="center">125.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>Safari 1.3</td>
                            <td>OSX.3</td>
                            <td class="center">312.8</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>Safari 2.0</td>
                            <td>OSX.4+</td>
                            <td class="center">419.3</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>Safari 3.0</td>
                            <td>OSX.4+</td>
                            <td class="center">522.1</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>OmniWeb 5.5</td>
                            <td>OSX.4+</td>
                            <td class="center">420</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>iPod Touch / iPhone</td>
                            <td>iPod</td>
                            <td class="center">420.1</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>S60</td>
                            <td>S60</td>
                            <td class="center">413</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 7.0</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 7.5</td>
                            <td>Win 95+ / OSX.2+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 8.0</td>
                            <td>Win 95+ / OSX.2+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 8.5</td>
                            <td>Win 95+ / OSX.2+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 9.0</td>
                            <td>Win 95+ / OSX.3+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 9.2</td>
                            <td>Win 88+ / OSX.3+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 9.5</td>
                            <td>Win 88+ / OSX.3+</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera for Wii</td>
                            <td>Wii</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Nokia N800</td>
                            <td>N800</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Nintendo DS browser</td>
                            <td>Nintendo DS</td>
                            <td class="center">8.5</td>
                            <td class="center">C/A<sup>1</sup>
                            </td>
                        </tr>
                        <tr class="gradeC">
                            <td>KHTML</td>
                            <td>Konqureror 3.1</td>
                            <td>KDE 3.1</td>
                            <td class="center">3.1</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                            <td>KHTML</td>
                            <td>Konqureror 3.3</td>
                            <td>KDE 3.3</td>
                            <td class="center">3.3</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>KHTML</td>
                            <td>Konqureror 3.5</td>
                            <td>KDE 3.5</td>
                            <td class="center">3.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Tasman</td>
                            <td>Internet Explorer 4.5</td>
                            <td>Mac OS 8-9</td>
                            <td class="center">-</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="gradeC">
                            <td>Tasman</td>
                            <td>Internet Explorer 5.1</td>
                            <td>Mac OS 7.6-9</td>
                            <td class="center">1</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeC">
                            <td>Tasman</td>
                            <td>Internet Explorer 5.2</td>
                            <td>Mac OS 8-X</td>
                            <td class="center">1</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Misc</td>
                            <td>NetFront 3.1</td>
                            <td>Embedded devices</td>
                            <td class="center">-</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Misc</td>
                            <td>NetFront 3.4</td>
                            <td>Embedded devices</td>
                            <td class="center">-</td>
                            <td class="center">A</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Misc</td>
                            <td>Dillo 0.8</td>
                            <td>Embedded devices</td>
                            <td class="center">-</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Misc</td>
                            <td>Links</td>
                            <td>Text only</td>
                            <td class="center">-</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="gradeX">
                            <td>Misc</td>
                            <td>Lynx</td>
                            <td>Text only</td>
                            <td class="center">-</td>
                            <td class="center">X</td>
                        </tr>
                        <tr class="gradeC">
                            <td>Misc</td>
                            <td>IE Mobile</td>
                            <td>Windows Mobile 6</td>
                            <td class="center">-</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeC">
                            <td>Misc</td>
                            <td>PSP browser</td>
                            <td>PSP</td>
                            <td class="center">-</td>
                            <td class="center">C</td>
                        </tr>
                        <tr class="gradeU">
                            <td>Other browsers</td>
                            <td>All others</td>
                            <td>-</td>
                            <td class="center">-</td>
                            <td class="center">U</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END card -->
        </div>
        <!-- END CONTAINER FLUID -->
    </div>
    <!-- END PAGE CONTENT -->

@endsection