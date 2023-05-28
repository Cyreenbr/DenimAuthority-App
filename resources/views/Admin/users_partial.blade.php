
@foreach ($users as $user)
                <tr>
                         <td class="py-1">
                            <img src="{{ $user->profile_photo_url }}" alt="image"/>
                          </td>
                          <td>
                            {{$user->name}}
                          </td>
                          <td>
                            {{$user->email}}
                          </td>
                           <td>
                            @foreach ($user->services as $service)
                              {{ $service->nom }} &nbsp;
                            @endforeach
                          </td>
                          <td>
                           @if ($user->user_type == 0)
                             <a href="{{url('/deleteuser',$user->id)}}">
                               <button type="button" class="btn btn-outline-danger btn-fw btn-sm">Supprimer</button>
                             </a> 
                              <a href="{{url('/updateuserView',$user->id)}}">
                                 <button type="button" class="btn btn-outline-info btn-fw btn-sm">Modifier</button>
                              </a>  
                           @else
                             Non autorisé
                           @endif
                          </td>
            </tr>
@endforeach


