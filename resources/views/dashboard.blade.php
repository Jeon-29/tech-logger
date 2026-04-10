<nav style="padding: 20px; display: flex; justify-content: space-between; background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
    <span style="font-weight: bold; color: white;">TechLogger Pro</span>
    <form action="/logout" method="POST"> @csrf <button>Logout</button> </form>
</nav>

<div style="padding: 40px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
    <div style="background: rgba(255,255,255,0.2); padding: 20px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.3);">
        <h3 style="color: white; margin: 0;">Total Repairs</h3>
        <p style="font-size: 2rem; color: white; font-weight: bold;">12</p>
    </div>
</div>