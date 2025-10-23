<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoteEase</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<style>
/* Header and container styling */
    .voting-header {
        background-color: red;
        color: white;
        text-align: center;
        padding: 10px;
        font-weight: bold;
        border-radius: 5px 5px 0 0;
    }

    .voting-subtext {
        text-align: center;
        font-size: 14px;
        color: #555;
        margin-bottom: 20px;
    }

    /* Position section styling */
    .position-section {
        border: 1px solid #ddd;
        border-radius: 10px;
        margin-bottom: 25px;
        background-color: white;
        overflow: hidden;
    }

    .position-header {
        background-color: #1603b8;
        color: white;
        padding: 10px 15px;
        font-weight: bold;
        font-size: 16px;
    }

    .position-subtext {
        font-size: 12px;
        color: #d9d9d9;
    }

    /* Candidate cards */
    .candidate-card {
        text-align: center;
        transition: all 0.3s ease;
        cursor: pointer;
        border-radius: 10px;
        padding: 10px;
        border: 2px solid transparent;
    }

    .candidate-card img {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        object-fit: cover;
    }

    .candidate-card:hover {
        transform: scale(1.05);
        border-color: #0d6efd;
        box-shadow: 0 4px 10px rgba(13, 110, 253, 0.2);
    }

    .candidate-card.selected {
        border-color: #0d6efd;
        background-color: #e9f3ff;
        position: relative;
    }

    .candidate-card.selected::after {
        content: "✔";
        position: absolute;
        top: 8px;
        right: 15px;
        font-size: 1.5rem;
        color: #0d6efd;
        font-weight: bold;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .candidate-card img {
            width: 100px;
            height: 100px;
        }
    }
</style>

<body>
    <div class="container py-4">
    <a href="{{ route('student.election_title') }}" class="btn btn-primary  mt-5 mb-3">Back to Dashboard</a>
    <!-- Page Header -->
    <div class="voting-header">
        SSLG OFFICERS ELECTION 2025-2026
    </div>
    <div class="voting-subtext">
        Please select one candidate for each position.<br>
        <em>Vote Wisely!</em>
    </div>

    <!-- PRESIDENT SECTION -->
    <div class="position-section">
        <div class="position-header">
            President <span class="position-subtext d-block">Select 1 Candidate(s)</span>
        </div>
        <div class="row text-center p-3">

            <div class="col-md-4 col-sm-6 col-12">
                <div class="candidate-card" data-position="president" onclick="selectCandidate(this)">
                    <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Bea">
                    <h6 class="mt-2 fw-bold">Bea Serefica</h6>
                    <p class="mb-0 text-muted">Abc Partylist</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="candidate-card" data-position="president" onclick="selectCandidate(this)">
                    <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Ryzza">
                    <h6 class="mt-2 fw-bold">Ryzza Sebido</h6>
                    <p class="mb-0 text-muted">Independent</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="candidate-card" data-position="president" onclick="selectCandidate(this)">
                    <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Judy">
                    <h6 class="mt-2 fw-bold">Judy Muzada</h6>
                    <p class="mb-0 text-muted">SSG Partylist</p>
                </div>
            </div>
        </div>
    </div>

    <!-- VICE PRESIDENT SECTION -->
    <div class="position-section">
        <div class="position-header">
            Vice President <span class="position-subtext d-block">Select 1 Candidate(s)</span>
        </div>
        <div class="row text-center p-3">
            <div class="col-md-4 col-sm-6 col-12">
                <div class="candidate-card" data-position="vice_president" onclick="selectCandidate(this)">
                    <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Alice">
                    <h6 class="mt-2 fw-bold">Alice Ken</h6>
                    <p class="mb-0 text-muted">Abc Partylist</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="candidate-card" data-position="vice_president" onclick="selectCandidate(this)">
                    <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Eli">
                    <h6 class="mt-2 fw-bold">Eli Abuan</h6>
                    <p class="mb-0 text-muted">Independent</p>
                </div>
            </div>
            
        </div>
    </div>

    <!-- SECRETARY SECTION -->
    <div class="position-section">
        <div class="position-header">
            Secretary <span class="position-subtext d-block">Select 1 Candidate(s)</span>
        </div>
        <div class="row text-center p-3">
            <div class="col-md-4 col-sm-6 col-12">
                <div class="candidate-card" data-position="secretary" onclick="selectCandidate(this)">
                    <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Jane">
                    <h6 class="mt-2 fw-bold">Jane Doe</h6>
                    <p class="mb-0 text-muted">Unity Party</p>
                </div>
            </div>
        </div>
    </div>

    <!-- TREASURER SECTION -->
    <div class="position-section">
        <div class="position-header">
            Treasurer <span class="position-subtext d-block">Select 1 Candidate(s)</span>
        </div>
        <div class="row text-center p-3">
            <div class="col-md-4 col-sm-6 col-12">
                <div class="candidate-card" data-position="Treasurer" onclick="selectCandidate(this)">
                    <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Jane">
                    <h6 class="mt-2 fw-bold">Jane Doe</h6>
                    <p class="mb-0 text-muted">Unity Party</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Public Information Officer SECTION -->
     <div class="position-section">
        <div class="position-header">
            Public Information Officer <span class="position-subtext d-block">Select 1 Candidate(s)</span>
        </div>
        <div class="row text-center p-3">
            <div class="col-md-4 col-sm-6 col-12">
                <div class="candidate-card" data-position="pio" onclick="selectCandidate(this)">
                    <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Jane">
                    <h6 class="mt-2 fw-bold">Jane Doe</h6>
                    <p class="mb-0 text-muted">Unity Party</p>
                </div>
            </div>
        </div>
    </div>

     <!-- Protocol Officer SECTION -->
        <div class="position-section">
            <div class="position-header">
                Protocol Officer <span class="position-subtext d-block">Select 1 Candidate(s)</span>
            </div>
            <div class="row text-center p-3">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="candidate-card" data-position="po" onclick="selectCandidate(this)">
                        <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Jane">
                        <h6 class="mt-2 fw-bold">Jane Doe</h6>
                        <p class="mb-0 text-muted">Unity Party</p>
                    </div>
                </div>
            </div>
        </div>

     <!-- Auditor Officer SECTION -->
        <div class="position-section">
            <div class="position-header">
                Auditor Officer <span class="position-subtext d-block">Select 1 Candidate(s)</span>
            </div>
            <div class="row text-center p-3">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="candidate-card" data-position="auditor" onclick="selectCandidate(this)">
                        <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Jane">
                        <h6 class="mt-2 fw-bold">Jane Doe</h6>
                        <p class="mb-0 text-muted">Unity Party</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Grade 7 Representative SECTION -->
        <div class="position-section">
            <div class="position-header">
                Grade 7 Representative <span class="position-subtext d-block">Select 1 Candidate(s)</span>
            </div>
            <div class="row text-center p-3">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="candidate-card" data-position="representative" onclick="selectCandidate(this)">
                        <img src="{{ asset('images/PEDRO_ORATA_NHS_LOGO.png') }}" alt="Jane">
                        <h6 class="mt-2 fw-bold">Jane Doe</h6>
                        <p class="mb-0 text-muted">Unity Party</p>
                    </div>
                </div>
            </div>
        </div>

    <!-- Submit Button -->
    <div class="text-center mt-4">
        <button class="btn btn-primary px-5 py-2" id="submitVoteBtn" disabled>Submit Vote</button>
    </div>
</div>
<script>
const selectedCandidates = {};

function selectCandidate(card) {
    const position = card.dataset.position;

    // Unselect previous selection for this exact position
    const cards = document.querySelectorAll(`.candidate-card[data-position="${position}"]`);
    cards.forEach(c => c.classList.remove('selected'));

    // Select this card
    card.classList.add('selected');
    selectedCandidates[position] = card.querySelector('h6').innerText;

    // Enable submit button when all positions selected
    const totalPositions = document.querySelectorAll('.position-section').length;
    document.getElementById('submitVoteBtn').disabled =
        Object.keys(selectedCandidates).length !== totalPositions;
}
</script>


</body>
</html>
