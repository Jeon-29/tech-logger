<body style="background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div style="background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(15px); border: 1px solid rgba(255, 255, 255, 0.3); padding: 40px; border-radius: 30px; width: 350px; box-shadow: 0 8px 32px rgba(0,0,0,0.1);">
        <h2 style="color: white; text-align: center; font-family: sans-serif;">Join TechLogger</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" style="width: 100%; padding: 12px; margin: 10px 0; border-radius: 12px; border: none; background: rgba(255,255,255,0.4);">
            <input type="email" name="email" placeholder="Email" style="width: 100%; padding: 12px; margin: 10px 0; border-radius: 12px; border: none; background: rgba(255,255,255,0.4);">
            <input type="password" name="password" placeholder="Password" style="width: 100%; padding: 12px; margin: 10px 0; border-radius: 12px; border: none; background: rgba(255,255,255,0.4);">
            <button type="submit" style="width: 100%; padding: 12px; border-radius: 12px; border: none; background: #fff; color: #8ec5fc; font-weight: bold; cursor: pointer;">Register</button>
        </form>
        <p style="margin-top: 15px; color: white; font-size: 0.8rem;">Already have an account? <a href="/login" style="color: #fff; font-weight: bold;">Login</a></p>
    </div>
</body>