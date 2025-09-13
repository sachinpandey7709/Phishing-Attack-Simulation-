# Phishing Simulation (Educational) — Cloudflare Integration 🔐📣

**One-line:** A safe, ethical framework for running phishing *simulations* for training, detection validation, and Cloudflare-based defensive testing.

## Summary
This repository provides materials for **benign phishing simulations** used only for cybersecurity training, awareness, and SOC detection testing. It contains a sample landing page and a **non-destructive** backend simulation that does **NOT** save or transmit real user credentials. The project's goal is to teach detection, response, and user awareness — **not** to perform or enable credential theft.

## ⚠️ Mandatory Disclaimer & Rules
- This project is strictly for **education, awareness, and defensive testing** in an authorized environment.  
- It **must not** be used to target real users or systems without explicit written authorization.  
- **Do NOT** collect real credentials or personal data. If you previously included a `login.php` or `cred.txt` that stores credentials, **remove them immediately** and replace with the safe `login.php` provided here.  
- The repository owner is **not responsible** for misuse.

## Contents / What’s Included
- `index.html` — sample benign landing/training page (you may already have this).  
- `login.php` — **benign** simulation backend (does NOT store credentials; writes only an anonymized audit event).  
- `legal/authorization-form.md` — template for written authorization and scope (recommended).  
- `cloudflare/notes.md` — non-actionable notes about using Cloudflare to monitor/secure the lab domain.

## Goals & Use Cases
- Employee security awareness training (consenting participants).  
- SOC/WAF detection and telemetry validation using Cloudflare logs.  
- Classroom / lab demonstrations showing how phishing works and how to defend against it.  
- Building playbooks for incident response and remediation.

## Prerequisites (Safe Lab)
- A segregated lab environment (VMs / isolated network).  
- Cloudflare account for your test domain (optional but recommended for telemetry).  
- Test user accounts (explicitly not real personal accounts).

## This Tool Tested On : 
- Kali Linux
- Parrot Security OS

## Quick Start (Local, Safe Demo)

1. **Clone the repo**
   ```bash
   git clone https://github.com/sachinpandey7709/Phishing-Attack-Simulation-.git
   cd Phishing-Attack-Simulation
   ls
   
