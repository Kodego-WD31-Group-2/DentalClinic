@extends('../layout/' . $layout)

@section('subhead')
    <title>Calendar - Smileville Dental Services</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Calendar</h2>
    </div>
    <div class="grid grid-cols-12 gap-5 mt-5">  
        <!-- BEGIN: Calendar  -->
        <div class="col-span-12 xl:col-span-8 2xl:col-span-9">
            <div class="box p-5">
                <div class="full-calendar" id="calendar"></div>
            </div>
        </div>
        <!-- END: Calendar  -->
        <!-- BEGIN: Calendar Side Menu -->
        <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
            
            <div class="box p-5 intro-y">
                <h2 class="text-lg font-medium mr-auto">Philippines Public Holidays</h2>
                
                <div class="border-t border-b border-slate-200/60 dark:border-darkmode-400 mt-6 mb-5 py-3 overflow-x-hidden" style="max-height: 500px; overflow-y: scroll">
                    
                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            <div class="pr-10 pl-5">
                                <div >New Year's Day</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>January 1
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            <div class="pr-10 pl-5">
                                <div >EDSA Revolution</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>February 25s
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >Maundy Thursday</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>April 6
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >Good Friday</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>April 7
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >Black Saturday</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>April 8
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out  hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >Eidul Fitr</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>April 22
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >Labor Day</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>May 1
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out  hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >Independence Day</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>June 12
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >Eidul Adha</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>June 28
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out  hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >Ninoy Aquino Day</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>August 21
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >National Heroes Day</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>August 28
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out  hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >All Saints' Day</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>November 1
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >All Saints' Day Holiday</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>November 2
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out  hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >Bonifacio Day</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>November 30
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >Immaculate Conception</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>December 8
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out  hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >Christmas Day</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>December 25
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >Rizal Day</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>December 30
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            
                            <div class="pr-10 pl-5">
                                <div >New Year's Eve</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span>December 31
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    </div>
                    <div class="text-slate-500 p-3 text-center hidden" id="calendar-no-events">No events yet</div>
                </div>
            </div>
        </div>
        <!-- END: Calendar Side Menu -->
    </div>
@endsection
