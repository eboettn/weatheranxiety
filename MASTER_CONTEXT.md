# MASTER_CONTEXT.md

## Purpose

This file is the permanent instruction layer for Codex and any AI coding agent working on this project.

Codex must read and follow this file before creating, editing, refactoring, or reviewing code.

The goal is to prevent AI drift, scope creep, over-engineering, fear-based language, and technical decisions that conflict with the product strategy.

---

# Product Mission

Build a trusted weather interpretation platform that helps families, children, and weather-anxious adults understand weather clearly enough to reduce fear and build confidence over time.

This product is not just a weather dashboard. It is a calm, scientifically grounded weather interpretation experience layered on top of trusted weather data sources.

The product should help users answer these core questions quickly:

- Is this dangerous?
- When should I pay attention?
- What type of weather is expected?
- How severe could it become?
- When can I relax?
- What does this alert actually mean?

Users should leave the product feeling:

- Confident
- Informed
- Calm
- Prepared
- Less overwhelmed

---

# Product Philosophy

The product exists to translate weather complexity into clear, practical understanding.

Core principles:

- Never sensationalize weather.
- Never minimize legitimate danger.
- Prioritize understanding over raw data.
- Translate trusted weather science into understandable language.
- Reduce cognitive overload.
- Increase confidence through clarity.
- Separate discomfort from danger.
- Explain uncertainty honestly.
- Make timing clear whenever possible.

This platform is:

- A weather interpretation platform.
- A confidence-building weather experience.
- A family-focused weather product.
- A calm but scientifically accurate weather companion.

This platform is not:

- A therapy platform.
- A fear-based severe weather site.
- A generic weather dashboard.
- A weather enthusiast-only tool.

---

# MVP Scope

The MVP should include only the core features needed to validate the product experience.

MVP features:

- Homepage dashboard
- Current conditions
- Hourly forecast
- Daily forecast
- Radar
- NWS alerts
- SPC outlooks
- Interpretation layer
- Timing guidance
- Glossary
- Founder/About page
- Email signup

Do not add user accounts, push notifications, AI summaries, personalization, subscriptions, advanced radar tools, or app-specific architecture during the MVP unless explicitly requested.

---

# UX Philosophy

The experience should feel:

- Trustworthy
- Calm
- Intelligent
- Helpful
- Guided
- Professional but warm

The UX must help users understand within seconds:

- If severe weather is expected.
- When it may happen.
- How serious it is.
- When they can stop worrying.

## Homepage hierarchy

Above the fold:

1. Current conditions
2. Severe weather status
3. Alerts if applicable
4. Quick interpretation summary
5. Brief timing guidance

Below the fold:

1. Hourly forecast
2. Radar
3. Severe weather details
4. SPC outlooks
5. Interpretation cards
6. Educational content

## Calm weather UX

During calm weather, the product may feel slightly more colorful, curious, educational, and encouraging.

Calm weather content should build familiarity and confidence without creating unnecessary urgency.

## Severe weather UX

During severe weather, the product should become simpler, more focused, more direct, and less playful.

The interface should emphasize:

- What is happening.
- Where it is happening.
- When to pay attention.
- What action may be needed.
- When conditions are expected to improve.

Avoid flashing, aggressive motion, alarmist copy, popups, and overstimulating design choices.

---

# Tone Rules

All user-facing language must be:

- Calm
- Clear
- Conversational
- Scientifically grounded
- Emotionally intelligent
- Family-friendly
- Practical
- Honest about uncertainty

Avoid:

- Hype
- Clickbait
- Doom-and-gloom language
- Catastrophic phrasing
- Overly technical meteorology
- Jargon overload
- Therapy-app language
- Childish presentation
- False reassurance
- Unnecessary urgency

Preferred language patterns:

- “Storms are possible later today, but widespread severe weather is not expected.”
- “The main window to pay attention is between 4 PM and 8 PM.”
- “Forecast confidence is moderate, so timing may still shift.”
- “Weather should become quieter overnight.”
- “A watch means conditions are favorable. A warning means dangerous weather is occurring or imminent.”

Do not use language like:

- “Monster storm.”
- “Explosive outbreak.”
- “Terrifying radar.”
- “You are safe no matter what.”
- “Nothing to worry about.”
- “Panic mode.”

---

# Interpretation Engine Rules

The interpretation engine is the product moat.

Its purpose is to:

- Translate weather complexity.
- Increase understanding.
- Reduce confusion.
- Improve confidence.
- Explain timing and severity.

## Golden rules

1. Never minimize real danger.
2. Never sensationalize weather.
3. Separate discomfort from danger.
4. Explain uncertainty honestly.
5. Prioritize clarity over jargon.
6. Remain scientifically defensible.

## Interpretation layers

Layer 1: Official data

- NWS alerts
- SPC outlooks
- Forecast data
- Radar data where applicable

Layer 2: Human-readable interpretation

Example:

“Storms are possible later today, but widespread severe weather is not expected.”

Layer 3: Practical guidance

Example:

“The main storm window is between 4 PM and 8 PM.”

## Watch vs warning logic

Watch:

- Conditions are favorable.
- Users should stay aware.
- Not everyone in the watch area will experience severe weather.

Warning:

- Dangerous weather is occurring or imminent.
- Users should follow official guidance.
- Interpretation should be direct and action-oriented.

## Timing rules

Timing is critical for reducing anxiety.

Always provide timing guidance when reliable data supports it.

Examples:

- “Storms are most likely this evening.”
- “Weather should calm down overnight.”
- “Most of the day should remain quiet.”
- “The highest attention window appears to be late afternoon into early evening.”

## Confidence language

Use confidence language when forecast details may shift.

Examples:

- “Forecast confidence is moderate.”
- “Timing may still shift.”
- “Storm intensity may change.”
- “The overall pattern is becoming clearer, but exact timing is still uncertain.”

## SPC translation examples

2 percent tornado risk:

“An isolated tornado cannot be ruled out today, but widespread tornado activity is not expected.”

Enhanced risk:

“Several strong storms may develop. Some could become severe.”

---

# Technical Stack

Use the simplest reliable stack that supports the MVP and remains compatible with common hosting environments.

## Backend

- PHP 8+
- JSON APIs
- Rules-based interpretation engine
- File-based caching at first
- Clear separation between data fetching, caching, interpretation, and response formatting

## Frontend

- HTML5
- CSS3
- Vanilla JavaScript
- Mobile-first responsive design
- No frontend framework unless explicitly approved
- No unnecessary dependencies

## Hosting and infrastructure

- cPanel-compatible hosting
- Cloudflare CDN recommended
- Cron jobs allowed for cache warming or SPC data refreshes
- Environment variables or config files for sensitive settings

## Primary data sources

National Weather Service:

- Forecasts
- Alerts
- Hourly data
- Forecast discussions
- Watches and warnings

Storm Prediction Center:

- Severe weather outlooks
- Tornado risk
- Wind risk
- Hail risk
- Mesoscale discussions in later phases

Radar source options:

- NOAA radar tiles
- RainViewer
- Iowa State Mesonet

---

# Non-Negotiables

- Never sensationalize weather.
- Never minimize legitimate danger.
- Mobile-first always.
- Fast-loading pages.
- Calm UX.
- Vanilla JavaScript preferred over frameworks.
- No unnecessary dependencies.
- cPanel-compatible hosting.
- All interpretation language must follow Interpretation Engine rules.
- Official weather data and interpretation must be clearly distinguished.
- Every API-dependent feature must have a loading state, empty state, error state, and degraded state.
- Never leave blank layouts when data fails.
- Always show last updated timestamps when using cached weather data.
- Do not create features outside the current build stage without explicit instruction.
- Do not refactor unrelated files.
- Do not redesign established UX without explicit instruction.

---

# Architecture Rules

Codex should build modularly and incrementally.

Preferred structure:

```text
/project-root
  /api
    current.php
    forecast-hourly.php
    forecast-daily.php
    alerts.php
    spc-outlook.php
    interpretation.php
  /includes
    config.php
    http-client.php
    cache.php
    nws-client.php
    spc-client.php
    interpretation-engine.php
    response.php
  /public
    index.html
    /assets
      /css
        styles.css
      /js
        app.js
        api.js
        ui.js
        interpretation.js
      /img
  /data
    /cache
  /docs
    MASTER_CONTEXT.md
    SYSTEM_ARCHITECTURE.md
  .env.example
  README.md
```

## Backend rules

- Keep API endpoints small and focused.
- Keep reusable logic in `/includes`.
- Return predictable JSON structures.
- Handle failed upstream APIs gracefully.
- Cache weather data according to freshness needs.
- Do not expose secrets.
- Validate and sanitize user inputs such as ZIP, city, or coordinates.
- Include timestamps in API responses.
- Include source labels where appropriate.

## Frontend rules

- Use progressive enhancement.
- Render useful fallback content when data is delayed.
- Keep JavaScript modular and readable.
- Avoid large libraries.
- Avoid cluttered UI.
- Favor cards, simple hierarchy, and readable spacing.
- Keep radar below the fold.
- Do not make radar the emotional center of the product.

## Caching rules

Use heavier caching for:

- Forecasts
- SPC outlooks
- Static educational content

Use shorter cache windows for:

- Alerts
- Radar
- Current conditions

During severe weather, refresh intervals may become shorter.

During calm weather, refresh intervals may be slower.

## Degraded mode rules

If APIs fail:

- Show cached data when available.
- Display last updated timestamp.
- Explain the issue clearly and calmly.
- Never leave a blank layout.
- Do not make alarming statements based on incomplete data.

Example:

“We are having trouble refreshing the latest weather data. Showing the most recent available information from 3:40 PM.”

---

# Accessibility Rules

The site must be accessible, readable, and usable under stress.

Accessibility requirements:

- Mobile-first layout.
- Strong color contrast.
- Do not rely on color alone to communicate risk.
- Use readable font sizes.
- Use semantic HTML where possible.
- Provide clear headings.
- Use descriptive button labels.
- Ensure keyboard accessibility.
- Avoid flashing or pulsing animations.
- Keep motion subtle and optional where possible.
- Use plain-language labels for alerts and risks.

Stress-aware design requirements:

- Reduce visual clutter.
- Prioritize the next useful action.
- Keep severe weather screens focused.
- Avoid excessive technical detail above the fold.
- Explain details progressively.

---

# Emotional Guardrails

This product serves people who may already feel anxious, uncertain, or overwhelmed.

Every feature should reduce confusion, not increase it.

Do:

- Be calm.
- Be accurate.
- Be direct when danger exists.
- Explain what users should pay attention to.
- Explain when conditions are expected to improve.
- Give context for risks.
- Use uncertainty language honestly.
- Help parents explain weather to children.

Do not:

- Use fear as an engagement tactic.
- Overstate low-probability risks.
- Bury urgent alerts.
- Use vague reassurance.
- Make unsupported safety claims.
- Present raw severe weather data without interpretation.
- Make the user hunt for the answer to “Am I okay right now?”

---

# Radar UX Rules

Radar should support understanding, not fuel anxiety.

Radar requirements:

- Place radar below the primary interpretation summary.
- Use traditional radar colors.
- Keep controls simple.
- Optimize for mobile.
- Provide smooth animation.
- Avoid aggressive motion.
- Add interpretation only during relevant weather.
- Do not make radar the first thing users see during normal conditions.

---

# Alert UX Rules

Alert presentation should be clear, direct, and non-sensational.

Requirements:

- Use a thin full-width alert banner.
- Use color coding, but not color alone.
- Do not use popups for alerts.
- Provide expandable interpretation sections.
- Clearly distinguish official alert text from product interpretation.
- For warnings, make the message direct and action-oriented.
- For watches, explain that conditions are favorable, not guaranteed.

---

# File Structure Expectations

Codex must keep files organized by responsibility.

Expected responsibilities:

- `/api`: Public JSON endpoints.
- `/includes`: Shared PHP logic.
- `/public`: Public website files.
- `/public/assets/css`: Stylesheets.
- `/public/assets/js`: Frontend JavaScript modules.
- `/data/cache`: File-based API cache.
- `/docs`: Project documentation and AI context files.

Codex should not create large monolithic files unless specifically instructed.

Codex should avoid mixing:

- Data fetching with rendering.
- Interpretation rules with API clients.
- Styling with business logic.
- Official alert text with product-generated interpretation.

---

# Build Process Rules for Codex

For every coding task:

1. Read this MASTER_CONTEXT.md file first.
2. Identify the requested stage or feature.
3. Do only the requested work.
4. Do not add unrelated features.
5. Do not introduce a framework without approval.
6. Preserve existing behavior unless explicitly asked to change it.
7. Keep implementation simple and modular.
8. Add or update documentation when helpful.
9. Include clear setup notes.
10. Summarize files changed.

Before completing a task, verify:

- Does this follow the product mission?
- Does this reduce anxiety through clarity?
- Does this avoid sensational language?
- Does this work on mobile?
- Does this fail gracefully?
- Does this preserve cPanel compatibility?
- Does this stay within the requested scope?

---

# MVP Development Order

Recommended build order:

1. Project scaffold and static homepage shell.
2. Mock data rendering for current, hourly, daily, alerts, SPC, and interpretation cards.
3. NWS API integration.
4. Alerts interpretation.
5. Hourly and daily timing guidance.
6. SPC outlook integration.
7. Rules-based interpretation engine refinement.
8. Radar integration.
9. Glossary and About page.
10. Email signup.
11. QA, accessibility, mobile polish, caching, and degraded mode testing.

Build in vertical slices whenever possible.

A vertical slice includes:

- Backend endpoint.
- Cache behavior.
- Frontend rendering.
- Loading state.
- Empty state.
- Error state.
- Interpretation language.
- Mobile styling.

---

# Final Product Standard

The MVP is successful when a weather-anxious parent, child, or adult can open the site and quickly understand:

- What is happening.
- Whether it is dangerous.
- When to pay attention.
- What official sources are saying.
- What the weather means in plain language.
- When they can relax.

The product should feel like a calm, trustworthy guide standing between raw weather data and an overwhelmed user.
