@extends('layout.layout')
@section('title','Login')

@section('sidebarOptions')
    <ul class="nav">
        <li class="nav-item active">
            <a href="index.html">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
            <h4 class="text-section">Components</h4>
        </li>

        <li class="nav-item">
            <a data-toggle="collapse" href="#base">
                <i class="fas fa-layer-group"></i>
                <p>Attendance</p>
                <span class="caret"></span>
            </a>
            <div class="collapse" id="base">
                <ul class="nav nav-collapse">
                    <li>
                        <a href="components/avatars.html">
                            <span class="sub-item">Add Attendance</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    @endsection

@section('main-panel')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Add Attendance</h4>

                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="#">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Attendance</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Add Attendance</a>
                        </li>
                    </ul>

                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="font-weight-bold">Please Select Your Center</label>
                                        <select name="center" id="" class="form-control">
                                            <option value="">Center 1</option>
                                            <option value="">Center 2</option>
                                            <option value="">Center 3</option>
                                            <option value="">Center 4</option>
                                            <option value="">Center 5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Please Record Your Voice By Clicking Button</label>
                                        {{--<button class=""></button>--}}
                                        <button type="button" class="btn fa fa-microphone form-control" data-toggle="modal" data-target="#exampleModalCenter"></button>
                                        <br>
                                        <ul id="recordingsList" class="list-unstyled"></ul>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Please Add Your Location For Verification</label>
                                        <button class="fa fa-location-arrow form-control"></button>
                                    </div>

                                    <div class="card-action">
                                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                                    </div>

                                    <!-- Button trigger modal -->
                                    {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">--}}
                                        {{--Launch demo modal--}}
                                    {{--</button>--}}

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Please read this sentence for attendance</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </div>
                                                <div class="modal-footer" style="text-align:center;">
                                                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                                                    {{--<button type="button" class="btn btn-danger"><i class="fa fa-microphone-alt"></i>  Record</button>--}}
                                                    {{--<button type="button" class="btn btn-primary"><i class="fa fa-stop"></i>  Stop</button>--}}
                                                    {{--<button type="button" class="btn btn-success">Submit Recording</button>--}}
                                                    <button id="recordButton" type="button" class="btn btn-danger "  style="margin:auto;display:block;"> <i class="fa fa-microphone-alt"></i>  Record</button>
                                                    <button id="pauseButton" type="button" class="btn btn-primary" disabled style="margin:auto;display:block;"><i class="fa fa-pause"></i>  Pause</button>
                                                    <button id="stopButton" type="button" class="btn btn-success" disabled style="margin:auto;display:block;"><i class="fa fa-stop"></i>  Stop</button>
                                                    {{--<div id="formats"></div>--}}
                                                    {{--<h3>Recordings</h3>--}}
                                                    <br>
                                                    <!-- inserting these scripts at the end to be able to use all the elements in the DOM -->

                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script>
        //webkitURL is deprecated but nevertheless
        URL = window.URL || window.webkitURL;

        var gumStream; 						//stream from getUserMedia()
        var rec; 							//Recorder.js object
        var input; 							//MediaStreamAudioSourceNode we'll be recording

        // shim for AudioContext when it's not avb.
        var AudioContext = window.AudioContext || window.webkitAudioContext;
        var audioContext //audio context to help us record

        var recordButton = document.getElementById("recordButton");
        var stopButton = document.getElementById("stopButton");
        var pauseButton = document.getElementById("pauseButton");

        //add events to those 2 buttons
        recordButton.addEventListener("click", startRecording);
        stopButton.addEventListener("click", stopRecording);
        pauseButton.addEventListener("click", pauseRecording);

        function startRecording() {
            console.log("recordButton clicked");

            /*
                Simple constraints object, for more advanced audio features see
                https://addpipe.com/blog/audio-constraints-getusermedia/
            */

            var constraints = { audio: true, video:false }

            /*
               Disable the record button until we get a success or fail from getUserMedia()
           */

            recordButton.disabled = true;
            stopButton.disabled = false;
            pauseButton.disabled = false

            /*
                We're using the standard promise based getUserMedia()
                https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia
            */

            navigator.mediaDevices.getUserMedia(constraints).then(function(stream) {
                console.log("getUserMedia() success, stream created, initializing Recorder.js ...");

                /*
                    create an audio context after getUserMedia is called
                    sampleRate might change after getUserMedia is called, like it does on macOS when recording through AirPods
                    the sampleRate defaults to the one set in your OS for your playback device

                */
                audioContext = new AudioContext();

                //update the format
                // document.getElementById("formats").innerHTML="Format: 1 channel pcm @ "+audioContext.sampleRate/1000+"kHz"

                /*  assign to gumStream for later use  */
                gumStream = stream;

                /* use the stream */
                input = audioContext.createMediaStreamSource(stream);

                /*
                    Create the Recorder object and configure to record mono sound (1 channel)
                    Recording 2 channels  will double the file size
                */
                rec = new Recorder(input,{numChannels:1})

                //start the recording process
                rec.record()

                console.log("Recording started");

            }).catch(function(err) {
                //enable the record button if getUserMedia() fails
                recordButton.disabled = false;
                stopButton.disabled = true;
                pauseButton.disabled = true
            });
        }

        function pauseRecording(){
            console.log("pauseButton clicked rec.recording=",rec.recording );
            if (rec.recording){
                //pause
                rec.stop();
                pauseButton.innerHTML="Resume";
            }else{
                //resume
                rec.record()
                pauseButton.innerHTML="Pause";

            }
        }

        function stopRecording() {
            console.log("stopButton clicked");

            //disable the stop button, enable the record too allow for new recordings
            stopButton.disabled = true;
            recordButton.disabled = false;
            pauseButton.disabled = true;

            //reset button just in case the recording is stopped while paused
            pauseButton.innerHTML="Pause";

            //tell the recorder to stop the recording
            rec.stop();

            //stop microphone access
            gumStream.getAudioTracks()[0].stop();

            //create the wav blob and pass it on to createDownloadLink
            rec.exportWAV(createDownloadLink);
        }

        function createDownloadLink(blob) {

            var url = URL.createObjectURL(blob);
            var au = document.createElement('audio');
            var li = document.createElement('li');
            var link = document.createElement('a');

            //name of .wav file to use during upload and download (without extendion)
            var filename = new Date().toISOString();

            //add controls to the <audio> element
            au.controls = true;
            au.src = url;

            //save to disk link
            link.href = url;
            link.download = filename+".wav"; //download forces the browser to donwload the file using the  filename
            link.innerHTML = "Save to disk";

            //add the new audio element to li
            li.appendChild(au);

            //add the filename to the li
            // li.appendChild(document.createTextNode(filename+".wav "))

            //add the save to disk link to li
            // li.appendChild(link);

            //upload link
            var upload = document.createElement('a');
            upload.href="#";
            upload.innerHTML = "";
            upload.addEventListener("click", function(event){


                // xhttp.onreadystatechange = function() {
                //     if (this.readyState == 4 && this.status == 200) {
                //         document.getElementById("demo").innerHTML =
                //         this.responseText;
                //   }
                // };
                // xhttp.open("GET", "ajax_info.txt", true);
                // xhttp.send();

                var xhr=new XMLHttpRequest();
                xhr.onreadystatechange = function(e) {
                    alert(this.readyState);
                    if(this.readyState === 4) {
                        alert("Hello");
                        console.log("Server returned: ", xhr.response);
                    }
                };
                var fd=new FormData();
                fd.append("audio", blob, filename);
                fd.append("name", "3");
                fd.append("demo", "rgd fg dfg gd gfdg")		;

                xhr.open("POST", "https://audiomanavdemo.herokuapp.com/uploader", true);
                // xhr.withCredentials = true;
                xhr.setRequestHeader('Access-Control-Allow-Origin', '*');
                xhr.setRequestHeader('Access-Control-Allow-Methods', 'POST');
                xhr.setRequestHeader('Access-Control-Allow-Credentials', true);
                xhr.setRequestHeader('Access-Control-Max-Age', '86400'); // 24 hours
                xhr.setRequestHeader('Access-Control-Allow-Headers', 'X-Requested-With, X-HTTP-Method-Override, Content-Type, Accept')
                // xhr.setRequestHeader("Access-Control-Allow-Credentials", "true");
                // xhr.open("POST", "upload.php", true);
                xhr.send(fd);

                xhr.onload = function(data) {
                    console.log("dlkajsdkasjdlkasjdljasld");
                    // console.log(data.success);
                };
            })
            li.appendChild(document.createTextNode (" "))//add a space in between
            li.appendChild(upload)//add the upload link to li

            //add the li element to the ol
            recordingsList.appendChild(li);
        }

    </script>
@endsection
