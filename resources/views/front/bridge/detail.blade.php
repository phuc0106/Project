@extends('front.master')

@section('content')

<h1></h1>
<div class="content__top-area content-bg content-top-bg pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="namebridge">
                DRAGON BRIDGE
                </div>
                <div class="w3-content w3-display-container">
                    @foreach ($image as $item)
                    
                        <img class="mySlides" src="{{ url('images/bridges/' .$item->path_name) }}" style="height:420px; width:1000px;">
                    
                    @endforeach
                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 0)">&#10094;</button>
                     <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 0)">&#10095;</button>
                </div>
                <div class="father" style="display: flex;">
                    <div class="left" style=" margin-right:100px;">
                        <table>
                            <tr>
                                <th colspan="2">Original name</th>
                                <td colspan="4">{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th colspan="2">Sted</th>
                                <td colspan="4"></td>
                            </tr>
                            <tr>
                                <th colspan="2">Crosses</th>
                                <td colspan="4"></td>
                            </tr>
                            <tr>
                                <th colspan="2">Status</th>
                                <td colspan="4"></td>
                            </tr>
                            <TR>
                                <th colspan="2">Open</th>
                                <td>{{$data->open_date}}</td>
                            </TR>
                            <TR>
                                <th colspan="2">Function</th>
                                <td>********</td>
                            </TR>
                            <TR>
                                <th colspan="2">Design</th>
                                <td>*******</td>
                            </TR>
                            <TR>
                                <th colspan="2">AADT 2006</th>
                                <td>*******</td>
                            </TR>
                        </table>
                            
                    </div>
                    <div class="right" style="margin-left: 10px;">
                        <table>
                            <tr>
                                <th colspan="2">Length</th>
                                <td colspan="4">{{$data->length}} m</td>
                            </tr>
                            <tr>
                                <th colspan="2">Height</th>
                                <td colspan="4">****</td>
                            </tr>
                            <tr>
                                <th colspan="2">Clearance below</th>
                                <td colspan="4">****</td>
                            </tr>
                            <tr>
                                <th colspan="2">Longest span</th>
                                <td colspan="4">****</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- <table style="padding: 100px;">
                <TR class="mt-25">
                        <th colspan="4">Bridge Information</th>
                    </TR>
                    <TR class="mt-25" style="padding: 10px;">
                        <
                       
                    </TR>
                    <TR>
                        

                    </TR>
                    <TR>
                        
                        
                    </TR>
                    <TR>


                    </TR>
                    
                </table> -->
                <div>Cau Rong (Dragon) Bridge on the Han River in Danang features 166 metres of undulating steel in the shape of a giant fire-breathing dragon flying towards the East Sea.


The main span of the 37.5m-wide bridge is bookended by two 128m side sections, with the dragon’s head and tail on each end of them. The whole structure weighs 8,164 tonnes and stretches 666m in length.

With unique aesthetic and creative characteristics, the bridge won the Diamond Award in the 2014 Engineering Excellence Awards (EEA) in the structural systems category.

After opening to traffic in March 2013, the Dragon Bridge has become one of Danang’s symbols and key tourist attractions.</div>
            </div>
            <div class="col-xl-4"  style="width: 100%;">
                <div>
                    <iframe class="col-xl-12" src= {{$data->location_map}} width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
                </div>
                <div >Nearest bridges</div>
                <div>
                    <table>
                        <tr>
                            <td>
                                <img src="" alt="">
                            </td>
                            <td colspan="2">Sân bay Đà Nẵng</td>
                            <td>10km</td>
                        </tr>
                    </table>
                </div>   
                <div>Submit more info</div> 
                <div>If you have any questions, suggestions for changes or see an error, please send a message</div>
                <div>
                    <div>Name</div>
                    <input type="text" value="Name" style="border: hidden;">
                </div>
                <div>
                    <div>Mail</div>
                    <input type="text" value="Mail" style="border: hidden;">
                </div>
                <div>
                    <div>Your message</div>
                    <input type="text" value="Your message" style="border: hidden;">
                </div>
            </div>
           
        </div>
    </div>
</div>  

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
    showDivs(slideIndex += n);
    }

    function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
    }
</script>
@endsection
