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

    button {
        width: 100px;
        color: #000;
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

<x-test-layout>
    <div class="d-flex flex-column justify-content-center align-items-center my-5">
        <div class="w-100 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('images/TestMinatBakat.png') }}" class="w-100 img-fluid" style="margin-top: -90px;">
            <div class="d-flex flex-column gap-3 bg-white rounded-5 p-5 m-5 shadow mt-4"
                style="width: 60%; height:650px; justify-content: center;">
                <div class="d-flex justify-content-center align-items-center" style="margin-top: 50px;">
                    <button type="button" class="btn btn-outline-secondary">Back</button>
                </div>
                <div class="d-flex justify-content-center align-items-center" style="margin-top: 20px;">
                    <p>Pertanyaan 1</p>
                </div>
                <div class="input-container" style="margin-top: 30px;">
                    <input type="checkbox" class="btn-check" id="btn-check-setuju" autocomplete="off"
                        onclick="toggleCheckbox('setuju')">
                    <label class="btn-label btn btn-outline-primary" for="btn-check-setuju">OPSI 1</label>
                </div>
                <div class="input-container" style="margin-top: 10px;">
                    <input type="checkbox" class="btn-check" id="btn-check-tidak-setuju" autocomplete="off"
                        onclick="toggleCheckbox('tidak-setuju')">
                    <label class="btn-label btn btn-outline-primary" for="btn-check-tidak-setuju">OPSI 2</label>
                </div>
                <div class="d-flex justify-content-center align-items-center" style="margin-top: 30px;">
                    <button type="button" class="btn btn-outline-secondary" style="width: 100px;">Next</button>
                </div>
            </div>
        </div>
</x-test-layout>
