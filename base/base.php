<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Hoteles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const typeRoomSelect = document.getElementById('typeRoom');
        const acomodacionSelect = document.getElementById('acomodacion');

        const acomodaciones = {
            'Estándar': ['Sencilla', 'Doble'],
            'Junior': ['Triple', 'Cuádruple'],
            'Suite': ['Sencilla', 'Doble', 'Triple']
        };

        typeRoomSelect.addEventListener('change', function() {
            const selectedType = this.value;
            acomodacionSelect.innerHTML = '<option value="">Seleccione</option>';
            
            if (selectedType) {
                acomodaciones[selectedType].forEach(function(acomodacion) {
                    const option = document.createElement('option');
                    option.value = acomodacion;
                    option.textContent = acomodacion;
                    acomodacionSelect.appendChild(option);
                });
            }
        });
    });
    </script>