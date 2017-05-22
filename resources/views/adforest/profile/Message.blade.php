@extends('adforest.layout.master')

@section('content')

 <section class="section-padding gray">
            <div class="container">
                  <div class="row">
                   <div class="message-body">
                     <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="message-inbox">
                           <div class="message-header">
                              <h4>Inbox</h4>
                           </div>
                           <ul class="message-history">
                              <!-- LIST ITEM -->
                @foreach(\App\Models\UserMessage::where('to_user_id', Auth::id())->get() as $key)
                    <li href= "#" class="message-grid">
                       <a href="{{ url('profile/Message/getformmsg/'. $key->from_user_id)}}">
                          <div class="image">
                             <img src="https://www.w3schools.com/images/w3schools_green.jpg" alt="">
                          </div>
                          <div class="user-name">
                             <div class="author">
                                <span>{{ $key->from_name}}</span><div class=""></div>
                             </div>
                             <p>Xperia Z5 For Sale</p>
                             <div class="time">
                                 <span>7 days ago</span>
                             </div>
                          </div>
                       </a>
                    </li>
                 @endforeach
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-8 clearfix col-sm-5 col-xs-12 message-content">
                        <div class="message-details">
                           <div class="author">
                              <div class="image">
                                 <img src="https://www.w3schools.com/images/w3schools_green.jpg" alt="">
                              </div>
                              <span class="author-name">{{ $user_nm }}</span>
                              <em>5 days ago</em>
                           </div>
                           
                           <ul class="messages">
                            @foreach($user_msg as $ms)
                              <li class="my-message clearfix">
                                 <figure class="profile-picture">
                                    <img src="https://www.w3schools.com/images/w3schools_green.jpg" class="img-circle" alt="Profile Pic">
                                 </figure>
                                 <div class="message">
                                    {{ $ms->messages }}
                                    <div class="time"><i class="fa fa-clock-o"></i> Today 8:55 AM</div>
                                 </div>
                              </li>
                              
                           @endforeach
                           @foreach(\App\Models\UserMessage::where('from_user_id', $ms->to_user_id)->get() as $myms)
                                <li class="friend-message clearfix">
                                 <figure class="profile-picture">
                                    <img src="" class="img-circle" alt="Profile Pic">
                                 </figure>
                                 <div class="message">
                                   {{ $myms->messages }}
                                    <div class="time"><i class="fa fa-clock-o"></i> Today 8:56 AM</div>
                                 </div>
                              </li>
                              @endforeach
                           </ul>
                           <div class="chat-form ">
                    <form role="form" class="form-inline" action="{{ url('profile/Message') }}" method="post">
                  {{ csrf_field() }}
                       <div class="form-group">
                           <input type="hidden" name="from_name" value="{{ \Auth::user()->name }}">
                           <input type="hidden" name="to_user_id" value="{{ $user_id }}">
                           <input type="hidden" name="from_user_id" value="{{ Auth::id() }}">
                           <input style="width: 100%" placeholder="Type a message here..." class="form-control" name="messages" type="text">
                                 </div>
                                 <button class="btn btn-theme" type="submit">Send</button>
                              </form>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>



   
    @endsection