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
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <div id="text-chat">
                    
                        <div class="bubble bubble-them">Hello i am Trissa!</div>
                        <div class="bubble bubble-you">Hello im John, how are you doing today?</div>
                        <div class="bubble bubble-them">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vitae iste, ad voluptate deleniti repudiandae amet officia laudantium est, beatae voluptates natus officiis quidem ipsam nemo quas suscipit quisquam. Dicta.</div>
                        <div class="bubble bubble-you">Suspendisse fringilla eros ut felis scelerisque, id accumsan felis sollicitudin. Integer tempor purus id est suscipit, et consequat libero condimentum.</div>
                        <div class="bubble bubble-you">Vivamus ultricies pretium dui. Cras porta sollicitudin ornare. Aenean imperdiet urna risus. Quisque in sapien in velit ullamcorper interdum.</div>
                        <div class="bubble bubble-them">Pellentesque nec turpis ac massa tempor mattis ut ac diam. Proin egestas lacinia lacus, nec vulputate tellus bibendum eu. Suspendisse nec egestas est.</div>
                        <div class="bubble bubble-you">Curabitur in lectus vitae metus commodo egestas non a erat.</div>
                        <div class="bubble bubble-you">Cras arcu ligula, dignissim nec interdum ac, consectetur at nisi.</div>
                        <div class="bubble bubble-them">Vivamus augue velit, tempus sed luctus tempor, finibus eleifend urna. Ut convallis efficitur auctor.</div>
                        <div class="bubble bubble-them">Vestibulum aliquet suscipit leo.</div>
                        <div class="bubble bubble-you">Si.</div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection
