<style>
    .btn {
        background-color: transparent;
        color: #000;
        border: 5px solid #37ADBE;
    }

    .input-container {
        margin-bottom: 15px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    .btn-label {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: transparent;
        color: #000;
        border: 5px solid #37ADBE;
        border-radius: 5px;
        height: 50px;
        /* width: 200px; */
        text-align: center;
    }

    input[type="radio"]:checked {
        background-color: #37ADBE;
        color: white;
    }

    label:hover {
        background-color: #37ADBE;
    }

    p {
        font-family: raleway, poppins;
        font-size: 20px;
        font-weight: 500;
        letter-spacing: 2px;
        text-align: center;
    }

    button {
        width: 100px;
        color: #000;
    }

    .source {
        font-family: raleway, poppins;
        font-size: 14px;
        font-weight: normal;
        text-align: center;
        margin-top: 30px;
    }
</style>

<x-test-layout>
    <div class="d-flex flex-column justify-content-center align-items-center my-5">
        <div class="w-100 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('images/TestMinatBakat.png') }}" class="w-100 img-fluid" style="margin-top: -90px;">
            <div id="test-container" class="d-flex flex-column gap-3 bg-white rounded-5 p-5 m-5 shadow mt-4"
                style="width: 60%; justify-content: center;">

                <div class="input-container d-flex flex-column gap-3 my-5">
                    <p id="question">tes</p>
                    <input type="radio" class="btn-check" name="answer" value="A" id="A" required>
                    <label id="labelA" class="btn-label btn btn-outline-primary" for="A">
                        <i class="em em-smile" aria-role="presentation"
                            aria-label="SMILING FACE WITH OPEN MOUTH AND SMILING EYES"></i>
                        A
                    </label>

                    <input type="radio" class="btn-check" name="answer" value="B" id="B" required>
                    <label id="labelB" class="btn-label btn btn-outline-primary" for="B">
                        <i class="em em-smile" aria-role="presentation"
                            aria-label="SMILING FACE WITH OPEN MOUTH AND SMILING EYES"></i>
                        B
                    </label>

                    <input type="radio" class="btn-check" name="answer" value="C" id="C" required>
                    <label id="labelC" class="btn-label btn btn-outline-primary" for="C">
                        <i class="em em-smile" aria-role="presentation"
                            aria-label="SMILING FACE WITH OPEN MOUTH AND SMILING EYES"></i>
                        C
                    </label>

                    <input type="radio" class="btn-check" name="answer" value="D" id="D" required>
                    <label id="labelD" class="btn-label btn btn-outline-primary" for="D">
                        <i class="em em-smile" aria-role="presentation"
                            aria-label="SMILING FACE WITH OPEN MOUTH AND SMILING EYES"></i>
                        D
                    </label>
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <button id="next-button" type="submit" class="btn btn-outline-secondary">Next</button>
                </div>
            </div>

        </div>

        <!-- Source -->
        {{-- <p class="source">Source: <a href="https://www.16personalities.com/free-personality-test" target="_blank">16
                Personalities Test</a></p> --}}
        <p id="user-id" style="display: none;">{{ Auth::user()->id }}</p>
    </div>
</x-test-layout>

<script src="{{ asset('js/loadTesMinatBakat.js') }}"></script>
