<div class="calendar">
  <div class="timeline">
    <div class="spacer"></div>
    <div class="time-marker">9 AM</div>
    <div class="time-marker">10 AM</div>
    <div class="time-marker">11 AM</div>
    <div class="time-marker">12 PM</div>
    <div class="time-marker">1 PM</div>
    <div class="time-marker">2 PM</div>
    <div class="time-marker">3 PM</div>
    <div class="time-marker">4 PM</div>
    <div class="time-marker">5 PM</div>
    <div class="time-marker">6 PM</div>
  </div>
  <div class="days">
    <div class="day mon">
      <div class="date">
        <p class="date-num">9</p>
        <p class="date-day">Mon</p>
      </div>
      <div class="events">
        <div class="event start-2 end-5 securities">
          <p class="title">Securities Regulation</p>
          <p class="time">2 PM - 5 PM</p>
        </div>
      </div>
    </div>
    <div class="day tues">
      <div class="date">
        <p class="date-num">12</p>
        <p class="date-day">Tues</p>
      </div>
      <div class="events">
        <div class="event start-10 end-12 corp-fi">
          <p class="title">Corporate Finance</p>
          <p class="time">10 AM - 12 PM</p>
        </div>
        <div class="event start-1 end-4 ent-law">
          <p class="title">Entertainment Law</p>
          <p class="time">1PM - 4PM</p>
        </div>
      </div>
    </div>
    <div class="day wed">
      <div class="date">
        <p class="date-num">11</p>
        <p class="date-day">Wed</p>
      </div>
      <div class="events">
        <div class="event start-12 end-1 writing">
          <p class="title">Writing Seminar</p>
          <p class="time">11 AM - 12 PM</p>
        </div>
        <div class="event start-2 end-5 securities">
          <p class="title">Securities Regulation</p>
          <p class="time">2 PM - 5 PM</p>
        </div>
      </div>
    </div>
    <div class="day thurs">
      <div class="date">
        <p class="date-num">12</p>
        <p class="date-day">Thurs</p>
      </div>
      <div class="events">
        <div class="event start-10 end-12 corp-fi">
          <p class="title">Corporate Finance</p>
          <p class="time">10 AM - 12 PM</p>
        </div>
        <div class="event start-1 end-4 ent-law">
          <p class="title">Entertainment Law</p>
          <p class="time">1PM - 4PM</p>
        </div>
      </div>
    </div>
    <div class="day fri">
      <div class="date">
        <p class="date-num">13</p>
        <p class="date-day">Fri</p>
      </div>
      <div class="events">
      </div>
    </div>
  </div>
</div>

<style>
    :root {
  --numDays: 5;
  --numHours: 10;
  --timeHeight: 60px;
  --calBgColor: #fff1f8;
  --eventBorderColor: #f2d3d8;
  --eventColor1: #ffd6d1;
  --eventColor2: #fafaa3;
  --eventColor3: #e2f8ff;
  --eventColor4: #d1ffe6;
}

.calendar {
  display: grid;
  gap: 10px;
  grid-template-columns: auto 1fr;
  margin: 2rem;
}

.timeline {
  display: grid;
  grid-template-rows: repeat(var(--numHours), var(--timeHeight));
}

.days {
  display: grid;
  grid-column: 2;
  gap: 5px;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
}

.events {
  display: grid;
  grid-template-rows: repeat(var(--numHours), var(--timeHeight));
  border-radius: 5px;
  background: var(--calBgColor);
}

// Place on Timeline
.start-10 {
  grid-row-start: 2;
}

.start-12 {
  grid-row-start: 4;
}

.start-1 {
  grid-row-start: 5;
}

.start-2 {
  grid-row-start: 6;
}

.end-12 {
  grid-row-end: 4;
}

.end-1 {
  grid-row-end: 5;
}

.end-3 {
  grid-row-end: 7;
}

.end-4 {
  grid-row-end: 8;
}

.end-5 {
  grid-row-end: 9;
}

// Event

.title {
  font-weight: 600;
  margin-bottom: 0.25rem;
}

.event {
  border: 1px solid var(--eventBorderColor);
  border-radius: 5px;
  padding: 0.5rem;
  margin: 0 0.5rem;
  background: white;
}

.space,
.date {
  height: 60px
}

// Global / Etc

body {
  font-family: system-ui, sans-serif;
}

.corp-fi {
  background: var(--eventColor1);
}

.ent-law {
  background: var(--eventColor2);
}

.writing {
  background: var(--eventColor3);
}

.securities {
  background: var(--eventColor4);
}

.date {
  display: flex;
  gap: 1em;
}

.date-num {
  font-size: 3rem;
  font-weight: 600;
  display: inline;
}

.date-day {
  display: inline;
  font-size: 3rem;
  font-weight: 100;
}
</style>