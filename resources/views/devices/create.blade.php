<body style="background-color: #f0f4f8; font-family: 'Segoe UI', sans-serif;">
    <div style="max-width: 400px; margin: 50px auto; background: rgba(255, 255, 255, 0.7); 
                backdrop-filter: blur(10px); border-radius: 20px; padding: 20px; 
                box-shadow: 0 8px 32px rgba(0,0,0,0.1); border: 1px solid rgba(255,255,255,0.3);">

        <h2 style="color: #6a8caf; text-align: center;">New Repair Log</h2>

        <form action="/device" method="POST">
            @csrf
            <input type="text" placeholder="Client Name" name="client_name" style="width: 100%; margin-bottom: 10px; border-radius: 10px; border: none; padding: 10px;">
            <input type="text" placeholder="Device Model" name="device_model" style="width: 100%; margin-bottom: 10px; border-radius: 10px; border: none; padding: 10px;">
            <textarea placeholder="Issue Description" name="issue_description" style="width: 100%; margin-bottom: 10px; border-radius: 10px; border: none; padding: 10px;"></textarea>
            <button type="submit">Save Log</button>
        </form>
    </div>
</body>