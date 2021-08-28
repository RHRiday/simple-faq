<x-faq-faqs>
    
    <div class="col-md-10 mx-auto">
        @foreach($faqs as $faq)
            <div class="accordion my_accordian" id="accordion{{$faq->id}}">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{$faq->id}}" aria-expanded="false"
                                aria-controls="collapse{{$faq->id}}">
                            <p class="faq_link">{{ $faq->question }}</p>
                        </button>
                    </h2>
                    <div id="collapse{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-bs-parent="#accordion{{$faq->id}}">
                        <div class="accordion-body">
                            <p class="faq_p">{{ $faq->answer }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-faq-faqs>