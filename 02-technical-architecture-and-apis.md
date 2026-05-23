# Technical Architecture and APIs

## Technical Priorities
1. Forecast accuracy and freshness
2. Mobile performance
3. Operational simplicity
4. Reliability during severe weather
5. Smooth radar experience
6. Graceful degraded modes

## Preferred Stack
### Backend
- PHP
- JSON APIs
- Rules-based interpretation engine

### Frontend
- HTML5
- CSS3
- Vanilla JavaScript
- Mobile-first responsive design

### Hosting
- cPanel-compatible hosting
- Cloudflare CDN recommended

## Primary APIs and Data Sources

### National Weather Service
https://api.weather.gov

Used for:
- Forecasts
- Alerts
- Hourly data
- Forecast discussions
- Watches and warnings

### Storm Prediction Center
https://www.spc.noaa.gov

Used for:
- Severe weather outlooks
- Tornado risk
- Wind risk
- Hail risk
- Mesoscale discussions

### Radar Sources
Potential options:
- NOAA radar tiles
- RainViewer
- Iowa State Mesonet

## Geolocation
- Browser-based geolocation
- ZIP search fallback
- City search fallback

## Refresh Strategy
Adaptive refresh behavior:
- Calm weather = slower refresh
- Severe weather = faster refresh

## Caching Strategy
Heavy caching:
- Forecasts
- SPC outlooks
- Static educational content

Short cache windows:
- Alerts
- Radar
- Current conditions

## Graceful Degraded Mode
If APIs fail:
- Show cached data
- Display last updated timestamp
- Explain temporary outage clearly
- Never leave blank layouts

## Future Architecture Considerations
- AI-assisted interpretation
- Push notifications
- User accounts
- Mobile apps
- Personalization