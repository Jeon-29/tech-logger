<body style="background: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; font-family: sans-serif;">
    <div style="background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.4); padding: 40px; border-radius: 25px; width: 320px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
        <h2 style="color: white; margin-bottom: 20px;">Welcome Back</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required style="width: 100%; padding: 12px; margin: 8px 0; border-radius: 10px; border: none; background: rgba(255,255,255,0.5);">
            <input type="password" name="password" placeholder="Password" required style="width: 100%; padding: 12px; margin: 8px 0; border-radius: 10px; border: none; background: rgba(255,255,255,0.5);">
            <button type="submit" style="width: 100%; padding: 12px; margin-top: 15px; border-radius: 12px; border: none; background: #a6c1ee; color: white; font-weight: bold; cursor: pointer;">Sign In</button>
        </form>
        <p style="margin-top: 15px; color: white; font-size: 0.8rem;">Don't have an account? <a href="/register" style="color: #fff; font-weight: bold;">Register</a></p>
    </div>
</body>