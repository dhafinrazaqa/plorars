<style>
    .btn {
        background-color: transparent;
        color: #000;
        border: 5px solid #37ADBE;

    }

    .input-container {
        margin-bottom: 15px;
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
        width: 200px;
        text-align: center;
    }
    p{
        font-family: raleway,poppins;
        font-size: 28px;
        font-weight: 200px;
        letter-spacing: 2px;

    }
    button {
        width: 100px;
        color: #000;
    }
    .btn-check + .btn-label{
        width: auto;
        padding: 10px 20px;
    }
    .input-container {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px;
        font-size: 16px;
    }
</style>

<x-test-minat-bakat>
    <div class="d-flex flex-column justify-content-center align-items-center my-5">
        <div class="w-100 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('images/TestMinatBakat.png') }}" class="w-100 img-fluid" style="margin-top: -90px;">
            <div class="d-flex flex-column gap-3 bg-white rounded-5 p-5 m-5 shadow mt-4"
                style="width: 60%; height:750px; justify-content: center;">
                <div class="d-flex justify-content-center align-items-center" style="margin-top: 50px;">
                    <button type="button" class="btn btn-outline-secondary" onclick="goPrev()">Back</button>
                </div>
                <div class="d-flex justify-content-center align-items-center" style="margin-top: 20px;">
                    <p id="question-container"></p>
                </div>
                <div class="input-container" style="margin-top: 30px;">
                    <input type="checkbox" class="btn-check" id="option_a" autocomplete="off" onclick="toggleCheckbox('setuju')">
                    <label class="btn-label btn btn-outline-primary" for="option_a" id="option_a_label">OPSI 1</label>
                </div>
                <div class="input-container" style="margin-top: 10px;">
                    <input type="checkbox" class="btn-check" id="option_b" autocomplete="off" onclick="toggleCheckbox('tidak-setuju')">
                    <label class="btn-label btn btn-outline-primary" for="option_b" id="option_b_label">OPSI 2</label>
                </div>
                <div class="input-container" style="margin-top: 10px;">
                    <input type="checkbox" class="btn-check" id="option_c" autocomplete="off" onclick="toggleCheckbox('option_c')">
                    <label class="btn-label btn btn-outline-primary" for="option_c" id="option_c_label">OPSI 3</label>
                </div>
                <div class="input-container" style="margin-top: 10px;">
                    <input type="checkbox" class="btn-check" id="option_d" autocomplete="off" onclick="toggleCheckbox('option_d')">
                    <label class="btn-label btn btn-outline-primary" for="option_d" id="option_d_label">OPSI 4</label>
                </div>
                <div class="d-flex justify-content-center align-items-center" style="margin-top: 30px;">
                    <button type="button" class="btn btn-outline-secondary" style="width: 100px;" onclick="goNext()">Next</button>
                </div>
            </div>
            <input type="hidden" name="nomor_quiz" value="0">
        </div>
    </div>
</x-test-minat-bakat>


