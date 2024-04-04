<div class="row mt-2">
    @forelse($itineraries as $key=>$item)
    <div class="col-lg-4 responsive-column-half">
        <div class="card card-item dashboard-info-card">
            <div class="card-body d-flex align-items-center">
                <div class="icon-element flex-shrink-0 bg-2 text-white">
                    <svg class="svg-icon-color-white" width="40" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path d="M405.333,42.667h-44.632c-4.418-12.389-16.147-21.333-30.035-21.333h-32.229C288.417,8.042,272.667,0,256,0
                                        s-32.417,8.042-42.438,21.333h-32.229c-13.888,0-25.617,8.944-30.035,21.333h-44.631C83.146,42.667,64,61.802,64,85.333v384
                                        C64,492.865,83.146,512,106.667,512h298.667C428.854,512,448,492.865,448,469.333v-384C448,61.802,428.854,42.667,405.333,42.667
                                        z M170.667,53.333c0-5.885,4.792-10.667,10.667-10.667h37.917c3.792,0,7.313-2.021,9.208-5.302
                                        c5.854-10.042,16.146-16.031,27.542-16.031s21.688,5.99,27.542,16.031c1.896,3.281,5.417,5.302,9.208,5.302h37.917
                                        c5.875,0,10.667,4.781,10.667,10.667V64c0,11.76-9.563,21.333-21.333,21.333H192c-11.771,0-21.333-9.573-21.333-21.333V53.333z
                                         M426.667,469.333c0,11.76-9.563,21.333-21.333,21.333H106.667c-11.771,0-21.333-9.573-21.333-21.333v-384
                                        c0-11.76,9.563-21.333,21.333-21.333h42.667c0,23.531,19.146,42.667,42.667,42.667h128c23.521,0,42.667-19.135,42.667-42.667
                                        h42.667c11.771,0,21.333,9.573,21.333,21.333V469.333z"></path>
                                    <path d="M160,170.667c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                        C192,185.021,177.646,170.667,160,170.667z M160,213.333c-5.875,0-10.667-4.781-10.667-10.667
                                        c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667C170.667,208.552,165.875,213.333,160,213.333z"></path>
                                    <path d="M160,277.333c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                        C192,291.688,177.646,277.333,160,277.333z M160,320c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667
                                        s10.667,4.781,10.667,10.667C170.667,315.219,165.875,320,160,320z"></path>
                                    <path d="M160,384c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32C192,398.354,177.646,384,160,384z
                                         M160,426.667c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667
                                        C170.667,421.885,165.875,426.667,160,426.667z"></path>
                                    <path d="M373.333,192h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                        c5.896,0,10.667-4.771,10.667-10.667C384,196.771,379.229,192,373.333,192z"></path>
                                    <path d="M373.333,298.667h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                        c5.896,0,10.667-4.771,10.667-10.667C384,303.438,379.229,298.667,373.333,298.667z"></path>
                                    <path d="M373.333,405.333h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                        c5.896,0,10.667-4.771,10.667-10.667C384,410.104,379.229,405.333,373.333,405.333z"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="pl-4">
                    <p class="card-text fs-18 mb-2">{{$item->itinerary_name}}</p>
                        <li>{{$item->itinerary_start}} to {{$item->itinerary_end}}</li>
                        <li>Pax: {{$item->itinerary_pax}}</li>
                    <h5 class="card-title pt-2 fs-15">Allocated Budget: &#8369; {{$item->itinerary_price}}</h5>
                    <a href="{{ route('user.itineraries.show', ['itinerary' => $item->id, 'day' => 1]) }}" class="icon-element icon-element-sm shadow-sm cursor-pointer ml-1 mt-4 text-success" data-toggle="tooltip" data-placement="top" data-title="View" data-original-title="" title=""><i class="la la-eye"></i></a>
                    <a href="{{ route('user.itineraries.destroy', ['itinerary' => $item->id]) }}" class="icon-element icon-element-sm shadow-sm cursor-pointer ml-1 mt-4  text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                        <i class="la la-trash"></i>
                    </a>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    @empty
    <div class="no-data-text col-12">No Itineraries Found</div>
    @endforelse
</div>
{{ $itineraries->links('user.components.pagination', ['items' => $itineraries]) }}
