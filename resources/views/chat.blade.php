@extends('layouts.app')

@section('content')

	<div id="video-chat-container">

        <div id="video-chat-them"></div>
        <div id="video-chat-you"></div>
		
		<div class="controlls">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        
            			<ul class="no-dots">
            				<li><a href="" id="icon-phone" class="ion-ios-telephone"></a></li>
            				<li><a href="" id="icon-camera" class="ion-ios-videocam"></a></li>
            				<li><a href="" id="icon-mic" class="ion-android-microphone"></a></li>
            				<li><a href="" id="icon-chat" class="ion-chatbubbles"></a></li>
            			</ul>

                    </div>
                </div>
            </div>

		</div>

	</div>



    <div id="text-chat-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div id="text-chat">
                    
                        <div class="bubble bubble-them">Hello i am Trissa!</div>
                        <div class="bubble bubble-you">Hello im John, how are you doing today?</div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection
